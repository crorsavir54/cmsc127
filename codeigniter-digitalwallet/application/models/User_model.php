<?php
class User_model extends CI_model{



public function register_user($user){


$this->db->insert('user', $user);

}

public function login_user($studentnumber,$pass){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('StudentNumber',$studentnumber);
  $this->db->where('password',$pass);

  if($query=$this->db->get()){
      return $query->row_array();
  }
  else{
    return false;
  }


}

public function login_admin($account,$pass){

  $this->db->select('*');
  $this->db->from('admins');
  $this->db->where('account',$account);
  $this->db->where('password',$pass);

  if($query=$this->db->get()){
      return $query->row_array();
  }
  else{
    return false;
  }


}

/* If no studentID is passed, returns all transactions
 * Else, returns transactions of given studentID
 */
function get_transactions($studentnumber=null)
{
    $this->db->select('*');
    $this->db->from('Transactions');
    //if ($studentnumber != null) $this->db->where('StudentNumber', $studentnumber);

    
    $query = $this->db->get();
    return $query->result();
}

function approve_transaction($TransactionID, $approve){
    $this->db->select('*');
    $this->db->from('Transactions');
    $this->db->where('TransactionID', $TransactionID);
    $query = $this->db->get();
    $result = $query->row();
    
    $this->db->set('TransactionID', $result->TransactionID);
    $this->db->set('type', $result->type);
    $this->db->set('cost', $result->cost);
    $this->db->set('time_created', $result->time_created);
    $this->db->set('time_approved', mdate('%Y-%m-%d %H:%i:%s', now()));
    $this->db->set('StudentNumber', $result->StudentNumber);
    $this->db->set('new_balance', $result->new_balance);
    $this->db->set('is_approved', !$result->is_approved);
    
    $this->db->replace('Transactions');
}

public function runQuery($query){
   $result = $this->db->query($query);
}

public function getBalance($studentNumber){
    
    $this->db->select('balance');
    $this->db->from('user');
    $this->db->where('StudentNumber', $studentNumber);
    $query = $this->db->get();
    $result = $query->row()->balance;
    return $result;
}

public function setBalance($studentNumber, $newBalance){
    
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('studentNumber', $studentNumber);
    $query = $this->db->get();
    $result = $query->row();
    
    $this->db->set('user_id', $result->user_id);
    $this->db->set('password', $result->password);
    $this->db->set('StudentNumber', $studentNumber);
    $this->db->set('balance', $newBalance);
    
    $this->db->replace('user');
}


public function studentnumber_check($studentnumber){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_studentnumber',$studentnumber);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}


}


?>
