<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends CI_Controller {

    // public function index($page = 0){
    public function index(){


      if ($this->session->userdata('username') === NULL)
      {
          $this->load->view('admin/login/login');
      }
      else
      {
            $this->load->model("header_model");  
            $data["fetch_data"] = $this->header_model->fetch_data(); 
              
            //include files
            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/header/view_header',$data);
      }

    }



    public function view_header(){

           $this->load->model("header_model");  
           $data["fetch_data"] = $this->header_model->fetch_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
 
           $this->load->view('admin/header/view_header',$data);

      //include files
  
    // $this->load->view('');

    }

     public function add_header() {

      //include files
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/sidebar');
    $this->load->view('admin/header/add_header');


    }


        public function edit_header($uid){
          $this->load->model("header_model"); 
          $data["fetch_single_data"] = $this->header_model->fetch_single_data($uid);

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/header/edit_header', $data);

    }

      //     public function update_data(){  



      //       $this->load->model("header_model");
      //       $uid = $this->input->post("hidden_id");
      //       $data["user_data"] = $this->header_model->fetch_single_data($uid);
      //       $data["fetch_data"] = $this->header_model->fetch_data();
      //       $this->header_model->update_data($data, $this->input->post("hidden_id"));  
      //       redirect(base_url() . "header/view_header", $data);
      // } 


      public function insert()  
        {  
                //include connection
                $this->load->model("header_model");  

                //form values
                $data = array(
                    //save data via post  
                     "mobile"     =>$this->input->post("mobile"),
                     "message"     =>$this->input->post("message")
 
                );  

             

                //Submit button name
                if($this->input->post("insert"))  
                {  
                    //insert data
                     $this->header_model->insert_data($data); 

                     //redirect to 
                     // redirect(base_url() . "header/view_header"); 
                     redirect(base_url() . 'view_header'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

          

       

                public function update()  
        {  
                //include connection
                $this->load->model("header_model");  
                $uid = $this->input->post("hidden_id");
                //form values
                $data = array(
                    //save data via post  
                     "mobile"     =>$this->input->post("mobile"),
                     "message"     =>$this->input->post("message")
                   
                     
                );  
                //Submit button name
                if($this->input->post("update"))  
                {  
                    //insert data
                     $this->header_model->update_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "header/view_header"); 
                     redirect(base_url() . 'view_header'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }


            public function delete_data($id)
            {  
                 echo $id;
               $this->load->model("header_model");  
               $this->header_model->delete_data($id);  
               redirect(base_url() . "view_header");  
            }  


}

 ?>