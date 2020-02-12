<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends CI_Controller {

    // public function index($page = 0){
    public function index(){


      if ($this->session->userdata('username') === NULL)
      {
          $this->load->view('admin/login/login');
      }
      else
      {
            $this->load->model("footer_model");  
            $data["fetch_data"] = $this->footer_model->fetch_data(); 
              
            //include files
            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/footer/view_footer',$data);
      }

    }



    public function view_footer(){

           $this->load->model("footer_model");  
           $data["fetch_data"] = $this->footer_model->fetch_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
 
           $this->load->view('admin/footer/view_footer',$data);

      //include files
  
    // $this->load->view('');

    }

     public function add_footer() {

      //include files
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/sidebar');
    $this->load->view('admin/footer/add_footer');


    }


        public function edit_footer($uid){
          $this->load->model("footer_model"); 
          $data["fetch_single_data"] = $this->footer_model->fetch_single_data($uid);

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/footer/edit_footer', $data);

    }

      //     public function update_data(){  



      //       $this->load->model("footer_model");
      //       $uid = $this->input->post("hidden_id");
      //       $data["user_data"] = $this->footer_model->fetch_single_data($uid);
      //       $data["fetch_data"] = $this->footer_model->fetch_data();
      //       $this->footer_model->update_data($data, $this->input->post("hidden_id"));  
      //       redirect(base_url() . "footer/view_footer", $data);
      // } 


      public function insert()  
        {  
                //include connection
                $this->load->model("footer_model");  

                //form values
                $data = array(
                    //save data via post  
                     "mobile"     =>$this->input->post("mobile"),
                     "visit"     =>$this->input->post("visit"),
                     "message"     =>$this->input->post("message")
 
                );  

             

                //Submit button name
                if($this->input->post("insert"))  
                {  
                    //insert data
                     $this->footer_model->insert_data($data); 

                     //redirect to 
                     // redirect(base_url() . "footer/view_footer"); 
                     redirect(base_url() . 'view_footer'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

               public function resizeImage($filename)
                       {
                          $source_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/footer/' . $filename;
                          $target_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/footer/thumbnail/' . $filename;
                          $config_manip = array(
                              'image_library' => 'gd2',
                              'source_image' => $source_path,
                              'new_image' => $target_path,
                              'maintain_ratio' => TRUE,
                              'create_thumb' => TRUE,
                              'thumb_marker' => '_thumb',
                              'width' => 150,
                              'height' => 150
                          );


                          $this->load->library('image_lib', $config_manip);
                          if (!$this->image_lib->resize()) {
                              echo $this->image_lib->display_errors();
                          }


                          $this->image_lib->clear();
                       } 


       

                public function update()  
        {  
                //include connection
                $this->load->model("footer_model");  
                $uid = $this->input->post("hidden_id");
                //form values
                $data = array(
                    //save data via post  
                     "mobile"     =>$this->input->post("mobile"),
                     "visit"     =>$this->input->post("visit"),
                     "message"     =>$this->input->post("message")
                   
                     
                );  
                //Submit button name
                if($this->input->post("update"))  
                {  
                    //insert data
                     $this->footer_model->update_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "footer/view_footer"); 
                     redirect(base_url() . 'view_footer'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }


            public function delete_data($id)
            {  
                 echo $id;
               $this->load->model("footer_model");  
               $this->footer_model->delete_data($id);  
               redirect(base_url() . "view_footer");  
            }  


}

 ?>