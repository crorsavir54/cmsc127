<?php
class Authorization extends CI_Controller {

    public function __construct(){

        parent::__construct();

        $this->load->helper('date');
        $this->load->model('user_model');
        //$this->load->model('admin');


    }
    function login(){
        // skip processing if already logged in
        if ($this->isUserLoggedIn()){
            $type = $this->session->userdata($type);
            redirectToMain($type);
        }
        
        $account = $this->input->post('user_studentnumber');
        $pass = md5($this->input->post('user_password'));
        
        // get type
        $type = explode('-',$this->input->post('user_studentnumber'))[0];
        if ($type == 'ITO' || $type == 'CASH') {
            // try log in
            $data=$this->user_model->login_admin($account,$pass);
        }
        else {
            // try log in
            $type='STUDENT';
            $data=$this->user_model->login_user($account,$pass);
        }
        
        
        
        if($data){ // if login is successful
            $this->session->set_flashdata('success_msg', 'bery gud');
            $this->session->set_userdata('user_id',$data['user_id']);
            $this->session->set_userdata('isLoggedIn',true);
            $this->session->set_userdata('user_type',$type);
            $this->session->set_userdata('studentnumber',$data['StudentNumber']);
            $this->session->set_userdata('balance',$data['balance']);

            $this->redirectToMain($type);
        }
        else{
            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            redirect('page/login');
        }


    }



    public function logout(){
      $this->session->sess_destroy();
      redirect('page/login', 'refresh');
    }
    
    
    // Helper functions
    public function isUserLoggedIn(){
        return $this->session->userdata('isLoggedIn');
    }
    
    private function redirectToMain($type)
    {
        if ($type == "STUDENT") redirect('page/main');
        else if ($type == "ITO") redirect('page/mainITO');
        else if ($type == "CASH") redirect('page/mainCashier');
        redirect('page/login');
    }

}
?>
