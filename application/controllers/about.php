<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    // public function index($page = 0){
    public function index(){


      if ($this->session->userdata('username') === NULL)
      {
          $this->load->view('admin/login/login');
      }
      else
      {
            $this->load->model("about_model");  
            $data["fetch_data"] = $this->about_model->fetch_data(); 
              
            //include files
            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/about/view_about',$data);
      }

    }



    public function view_about(){

           $this->load->model("about_model");  
           $data["fetch_data"] = $this->about_model->fetch_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
 
           $this->load->view('admin/about/view_about',$data);

      //include files
  
    // $this->load->view('');

    }

     public function add_about() {

      //include files
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/sidebar');
    $this->load->view('admin/about/add_about');


    }


        public function edit_about($uid){
          $this->load->model("about_model"); 
          $data["fetch_single_data"] = $this->about_model->fetch_single_data($uid);

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/about/edit_about', $data);

    }

      //     public function update_data(){  
      //       $this->load->model("about_model");
      //       $uid = $this->input->post("hidden_id");
      //       $data["user_data"] = $this->about_model->fetch_single_data($uid);
      //       $data["fetch_data"] = $this->about_model->fetch_data();
      //       $this->about_model->update_data($data, $this->input->post("hidden_id"));  
      //       redirect(base_url() . "about/view_about", $data);
      // } 


      public function insert()  
        {  
                //include connection
                $this->load->model("about_model");  

                $data1 = $_FILES["image"]["name"];
                  $new_name = time().$_FILES["image"]['name'];
                  $config['file_name'] = $new_name;
                  $config['upload_path']   = './uploads/about/'; 
                  $config['allowed_types'] = 'gif|jpg|png'; 
                  $config['max_size']      = 10024;
                  $config['max_width']   = 6000; 
                  $config['max_height']  = 6000;
                  $this->load->library('upload', $config);
                  $this->load->library('image_lib');
                  $this->load->model("about_model"); 

                //form values
                $data = array(
                    //save data via post  
                     "vision"     =>$this->input->post("vision"),
                     "mission"     =>$this->input->post("mission"),
                     "about"     =>$this->input->post("about"),
                     "image"     =>$new_name
                       
                );  

                 if ( ! $this->upload->do_upload('image')) {
                     $error = array('error' => $this->upload->display_errors());
                     echo "File size should be less than 1 MB"; 
                     // $this->load->view('logo', $error); 
                  }else { 



                    $uploadedImage = $this->upload->data();
                    $image = $uploadedImage['file_name'];


                    $this->resizeImage($uploadedImage['file_name']);

                
                  }

                //Submit button name
                if($this->input->post("insert"))  
                {  
                    //insert data
                     $this->about_model->insert_data($data); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_about'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

               public function resizeImage($filename)
                       {
                          $source_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/about/' . $filename;
                          $target_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/about/thumbnail/' . $filename;
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


        public function update_image()  
        {  
                //include connection
                $this->load->model("about_model");  
                $uid = $this->input->post("hidden_id");
                //form values
               
      $data1 = $_FILES["image"]["name"];
      $new_name = time().$_FILES["image"]['name'];
      $config['file_name'] = $new_name;
      $config['upload_path']   = './uploads/about/'; 
      $config['allowed_types'] = 'png|gif|jpg|'; 
      $config['max_size']      = 10024;
      $config['max_width']   = 6000; 
      $config['max_height']  = 6000;
      $this->load->library('upload', $config);
      $this->load->library('image_lib');
      $this->load->model("about_model"); 

      $data = array(
                    //save data via post  
                     "image"     =>$new_name
                   
                     
                );

       if ( ! $this->upload->do_upload('image')) {
         $error = array('error' => $this->upload->display_errors());
         echo "File size should be less than 1 MB"; 
         $this->load->view('about', $error); 
      }else { 



        $uploadedImage = $this->upload->data();
        $image = $uploadedImage['file_name'];


        $this->resizeImage($uploadedImage['file_name']);

        // $this->logo_model->insert_data($data);

        // print_r('Image Uploaded Successfully.');
        // redirect(base_url() . "logo"); 
      } 


                //Submit button name
                if($this->input->post("update"))  
                {  
                    //insert data
                     $this->about_model->update_image_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_about'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }



                public function update()  
        {  
                //include connection
                $this->load->model("about_model");  
                $uid = $this->input->post("hidden_id");
                //form values
                $data = array(
                    //save data via post  
                     "vision"     =>$this->input->post("vision"),
                     "mission"     =>$this->input->post("mission"),
                     "about"     =>$this->input->post("about")
                   
                     
                );  
                //Submit button name
                if($this->input->post("update"))  
                {  
                    //insert data
                     $this->about_model->update_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_about'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }


            public function delete_data($id)
            {  
                 echo $id;
               $this->load->model("about_model");  
               $this->about_model->delete_data($id);  
               redirect(base_url() . "view_about");  
            }  


}

 ?>