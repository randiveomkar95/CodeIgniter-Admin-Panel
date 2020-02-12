<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {


    public function index(){


        $this->load->model("testimonial_model");  
        $data["fetch_data"] = $this->testimonial_model->fetch_data(); 
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/testimonial/view_testimonial',$data);




    }

    public function insert()  
        {  
                //include connection
                $this->load->model("testimonial_model");  
                //form values

                  $data1 = $_FILES["image"]["name"];
                  $new_name = time().$_FILES["image"]['name'];
                  $config['file_name'] = $new_name;
                  $config['upload_path']   = './uploads/testimonial/'; 
                  $config['allowed_types'] = 'gif|jpg|png'; 
                  $config['max_size']      = 1024;
                  $this->load->library('upload', $config);
                  $this->load->library('image_lib');
                  $this->load->model("testimonial_model"); 

                $data = array(
                    //save data via post  
                     "name"     =>$this->input->post("name"),
                     "content"     =>$this->input->post("content"),
                     "designation"     =>$this->input->post("designation"),
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
                     $this->testimonial_model->insert_data($data); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_testimonial'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

                public function resizeImage($filename)
                       {
                          $source_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/testimonial/' . $filename;
                          $target_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/testimonial/thumbnail/' . $filename;
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

    public function add_testimonial(){

    	$this->load->view("admin/inc/header");
    	$this->load->view("admin/inc/sidebar");
    	$this->load->view("admin/testimonial/add_testimonial");

    }

       public function edit_testimonial($uid){
            $this->load->model("testimonial_model"); 
            $data["fetch_single_data"] = $this->testimonial_model->fetch_single_data($uid);

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/testimonial/edit_testimonial', $data);

    }

    public function view_testimonial(){

           $this->load->model("testimonial_model");  
           $data["fetch_data"] = $this->testimonial_model->fetch_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/testimonial/view_testimonial',$data);

      //include files
  
    // $this->load->view('');

    }


         public function update_image()  
        {  
                //include connection
                $this->load->model("testimonial_model");  
                $uid = $this->input->post("hidden_id");
                //form values
               
      $data1 = $_FILES["image"]["name"];
      $new_name = time().$_FILES["image"]['name'];
      $config['file_name'] = $new_name;
      $config['upload_path']   = './uploads/testimonial/'; 
      $config['allowed_types'] = 'gif|jpg|png'; 
      $config['max_size']      = 1024;
      $this->load->library('upload', $config);
      $this->load->library('image_lib');
      $this->load->model("testimonial_model"); 

      $data = array(
                    //save data via post  
                     "image"     =>$new_name
                   
                     
                );

       if ( ! $this->upload->do_upload('image')) {
         $error = array('error' => $this->upload->display_errors());
         echo "File size should be less than 1 MB"; 
         $this->load->view('logo', $error); 
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
                     $this->testimonial_model->update_image_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_testimonial'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

                  public function update_data()  
        {  
                //include connection
                $this->load->model("testimonial_model");  
                $uid = $this->input->post("hidden_id");
                //form values
                $data = array(
                    //save data via post  
                     "name"         =>$this->input->post("name"),
                     "content"      =>$this->input->post("content"),
                     "designation"  =>$this->input->post("designation"),
                   
                     
                );  
                //Submit button name
                if($this->input->post("update"))  
                {  
                    //insert data
                     $this->testimonial_model->update_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_testimonial'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

           public function delete_data($id)
            {  
                 echo $id;
               $this->load->model("testimonial_model");  
               $this->testimonial_model->delete_data($id);  
               redirect(base_url() . "view_testimonial");  
            }

}