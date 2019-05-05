<?php
class Page extends CI_Controller {

    public function __construct(){

        parent::__construct();

        //$this->load->helper('date');
        $this->load->model('user_model');

    }
    
    public function login(){
      session_destroy();
      unset($_SESSION['user_id']);
      $this->load->view("login.php");

    }
    
    public function main(){
        $this->redirectNonStudent();
        $this->load->view('header.php');
        $this->load->view('mainpage.php');
    }
    
    public function about(){
        $this->redirectNonStudent();
        $this->load->view('header.php');
        $this->load->view('aboutus.php');
    }
    
    public function profile(){
        $this->redirectNonStudent();
        $this->load->view('header.php');
        $this->load->view('profile.php');
        $query = $this->user_model->get_transactions($this->session->userdata('studentnumber'));
        $this->session->set_userdata("transactions", $query);
        $this->load->view('Transactions.php');
    }

    public function transactions()
    {
        $this->redirectNonStudent();
        $query = $this->user_model->get_transactions($this->session->userdata('studentnumber'));
        $this->session->set_userdata("transactions", $query);
        $this->load->view('header.php');
        $this->load->view('Transactions.php');
    }
    
    // admins
    public function mainCashier(){
        if ($this->isUserLoggedIn() == false ){
            redirect('page/login');
        }
        $type = $this->session->userdata('user_type');
        if ($type != 'CASH'){
             redirect('page/login');
        }
        
        $query = $this->user_model->get_transactions($this->session->userdata('studentnumber'));
        $this->session->set_userdata("transactions", $query);
        $this->load->view('header.php');
        $this->load->view('mainCashier.php');
        
    }
    
    public function mainITO(){
        if ($this->isUserLoggedIn() == false){
            redirect('page/login');
        }
        $type = $this->session->userdata('user_type');
        if ($type != 'ITO'){
             redirect('page/login');
        }
        echo 'I am ITO!';
        echo $type;
    }
    
    private function isUserLoggedIn(){
        return $this->session->userdata('isLoggedIn');
    }
    
    private function redirectNonStudent()
    {
        if ($this->isUserLoggedIn() == false ){
            redirect('page/login');
        }
        $type = $this->session->userdata('user_type');
        if ($type != 'STUDENT'){
             redirect('page/login');
        }
    }

    
}
?>
