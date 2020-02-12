<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class View_About extends CI_Controller {

    public function index(){
    $this->load->model("about_model");
    $data["fetch_data"] = $this->about_model->fetch_data();  
      //include files
    $this->load->view('header');
    $this->load->view('sidebar');
    $this->load->view("view_about", $data);
    }

}

 ?>