<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

    // public function index($page = 0){
    public function index(){


      if ($this->session->userdata('username') === NULL)
      {
          $this->load->view('admin/login/login');
      }
      else
      {
            $this->load->model("enquiry_model");  
            $data["fetch_data"] = $this->enquiry_model->fetch_data(); 
              
            //include files
            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/enquiry/view_enquiry',$data);
      }

    }



    public function view_enquiry(){

           $this->load->model("enquiry_model");  
           $data["fetch_data"] = $this->enquiry_model->fetch_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
 
           $this->load->view('admin/enquiry/view_enquiry',$data);


    }

        public function vendor_enquiry(){

           $this->load->model("enquiry_model");  
           $data["fetch_vendor_data"] = $this->enquiry_model->fetch_vendor_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
 
           $this->load->view('admin/enquiry/view_vendor_enquiry',$data);


    }


      public function insert()  
        {  

                $this->load->model("enquiry_model");  
                $data = array(
                    //save data via post  
                     "name"     =>$this->input->post("name"),
                     "email"     =>$this->input->post("email"),
                     "mobile"     =>$this->input->post("mobile"),
                     "enquiry_for"     =>$this->input->post("enquiry_for"),
                     "message"     =>$this->input->post("message"),
                );  

             

                //Submit button name
                if($this->input->post("insert"))  
                {  
                    //insert data
                     $this->enquiry_model->insert_data($data); 

                     //redirect to 
                     // redirect(base_url() . "enquiry/view_enquiry"); 
                     redirect(base_url() . 'view_enquiry'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

            public function delete_data($id)
            {  
                 echo $id;
               $this->load->model("enquiry_model");  
               $this->enquiry_model->delete_data($id);  
               redirect(base_url() . "view_enquiry");  
            }  

            public function delete_vendor_data($id)
            {  
                 echo $id;
               $this->load->model("enquiry_model");  
               $this->enquiry_model->delete_vendor_data($id);  
               redirect(base_url() . "view_vendor_enquiry");  
            } 


}

 ?>