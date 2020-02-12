<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){

    	$this->load->view('admin/login/login');

    }

    public function login_check(){

    	echo "hii";

    	

    }

       public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            // $this->index();
            // $message = "Incorrect Username or Password!";
            // $this->load->view('login/login', $message);
            echo '<script>alert("Incorrect Username or Password!");</script>';
            $this->index();
            // redirect(base_url() . 'login'); 
        }else{
            // If user did validate, 
            // Send them to members area
            redirect(base_url() . 'master'); 
            // echo "1";
        }        
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}