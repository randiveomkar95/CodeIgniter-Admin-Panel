<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    // public function index($page = 0){
    public function index(){


      if ($this->session->userdata('username') === NULL)
      {
          $this->load->view('admin/login/login');
      }
      else
      {
            $this->load->model("company_model");  
            $data["fetch_data"] = $this->company_model->fetch_data(); 
              
            //include files
            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/company/view_company',$data);
      }

    }



    public function view_company(){

           $this->load->model("company_model");  
           $data["fetch_data"] = $this->company_model->fetch_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
 
           $this->load->view('admin/company/view_company',$data);

      //include files
  
    // $this->load->view('');

    }

     public function add_company() {

      //include files
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/sidebar');
    $this->load->view('admin/company/add_company');


    }


        public function edit_company($uid){
          $this->load->model("company_model"); 
          $data["fetch_single_data"] = $this->company_model->fetch_single_data($uid);

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/company/edit_company', $data);

    }

      //     public function update_data(){  



      //       $this->load->model("company_model");
      //       $uid = $this->input->post("hidden_id");
      //       $data["user_data"] = $this->company_model->fetch_single_data($uid);
      //       $data["fetch_data"] = $this->company_model->fetch_data();
      //       $this->company_model->update_data($data, $this->input->post("hidden_id"));  
      //       redirect(base_url() . "company/view_company", $data);
      // } 


      public function insert()  
        {  
                //include connection
                $this->load->model("company_model");  

                $data1 = $_FILES["image"]["name"];
                  $new_name = time().$_FILES["image"]['name'];
                  $config['file_name'] = $new_name;
                  $config['upload_path']   = './uploads/company/'; 
                  $config['allowed_types'] = 'gif|jpg|png'; 
                  $config['max_size']      = 10024;
                  $config['max_width']   = 6000; 
                  $config['max_height']  = 6000;
                  $this->load->library('upload', $config);
                  $this->load->library('image_lib');
                  $this->load->model("company_model"); 

                //form values
                $data = array(
                    //save data via post  
                     "name"     =>$this->input->post("name"),
                     "designation"     =>$this->input->post("designation"),
                     "description"     =>$this->input->post("description"),
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
                     $this->company_model->insert_data($data); 

                     //redirect to 
                     // redirect(base_url() . "company/view_company"); 
                     redirect(base_url() . 'view_company'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

               public function resizeImage($filename)
                       {
                          $source_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/company/' . $filename;
                          $target_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/company/thumbnail/' . $filename;
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
                $this->load->model("company_model");  
                $uid = $this->input->post("hidden_id");
                //form values
               
      $data1 = $_FILES["image"]["name"];
      $new_name = time().$_FILES["image"]['name'];
      $config['file_name'] = $new_name;
      $config['upload_path']   = './uploads/company/'; 
      $config['allowed_types'] = 'png|gif|jpg|'; 
      $config['max_size']      = 10024;
      $config['max_width']   = 6000; 
      $config['max_height']  = 6000;
      $this->load->library('upload', $config);
      $this->load->library('image_lib');
      $this->load->model("company_model"); 

      $data = array(
                    //save data via post  
                     "image"     =>$new_name
                   
                     
                );

       if ( ! $this->upload->do_upload('image')) {
         $error = array('error' => $this->upload->display_errors());
         echo "File size should be less than 1 MB"; 
         $this->load->view('company', $error); 
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
                     $this->company_model->update_image_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "company/view_company"); 
                     redirect(base_url() . 'view_company'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }



                public function update()  
        {  
                //include connection
                $this->load->model("company_model");  
                $uid = $this->input->post("hidden_id");
                //form values
                $data = array(
                    //save data via post  
                     "name"     =>$this->input->post("name"),
                     "designation"     =>$this->input->post("designation"),
                     "description"     =>$this->input->post("description")
                   
                     
                );  
                //Submit button name
                if($this->input->post("update"))  
                {  
                    //insert data
                     $this->company_model->update_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "company/view_company"); 
                     redirect(base_url() . 'view_company'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }


            public function delete_data($id)
            {  
                 echo $id;
               $this->load->model("company_model");  
               $this->company_model->delete_data($id);  
               redirect(base_url() . "view_company");  
            }  


}

 ?>