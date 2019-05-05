<?php
class User extends CI_Controller {

    public function __construct(){

        parent::__construct();

        $this->load->helper('date');
        $this->load->model('user_model');

    }
    
    public function approve_transaction($TransactionID){
        $this->user_model->approve_transaction($TransactionID, true);
        redirect("page/transactions");
    }
    
    public function view_login() {
        echo 'fish';
        $success_msg= $this->session->flashdata('success_msg');
        $error_msg= $this->session->flashdata('error_msg');
            if($success_msg){
              echo $success_msg; 
            }
            if($error_msg){
              echo $error_msg; 
            }
    }


/*
    public function register_user(){
          $user=array(
          'user_name'=>$this->input->post('user_name'),
          'user_studentnumber'=>$this->input->post('user_studentnumber'),
          'user_password'=>md5($this->input->post('user_password')),
          'user_age'=>$this->input->post('user_age'),
          'user_mobile'=>$this->input->post('user_mobile')
            );
            print_r($user);

        $studentnumber_check=$this->user_model->studentnumber_check($user['user_studentnumber']);

        if($studentnumber_check){
          $this->user_model->register_user($user);
          $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
          redirect('user/login_view');

        }
        else{

          $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
          redirect('user');


        }

    }//*/

}
?>
