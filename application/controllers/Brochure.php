<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brochure extends CI_Controller {
    
  public function index()
  {
    $this->load->model("brochure_model");  
    $data["fetch_data"] = $this->brochure_model->fetch_data(); 
      
      //include files
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/sidebar');
    $this->load->view('admin/brochure/view_brochure',$data);
  }


         public function add_brochure() {

      //include files
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/sidebar');
    $this->load->view('admin/brochure/add_brochure');


    }


    public function edit_brochure($uid){
          $this->load->model("brochure_model"); 
          $data["fetch_single_data"] = $this->brochure_model->fetch_single_data($uid);

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/brochure/edit_brochure', $data);

    }


     public function update()  
        {  
                //include connection
                $this->load->model("brochure_model");  
                $uid = $this->input->post("hidden_id");
                //form values
               
      $data1 = $_FILES["image"]["name"];
      $new_name = time().$_FILES["image"]['name'];
      $config['file_name'] = $new_name;
      $config['upload_path']   = './uploads/brochure/'; 
      $config['allowed_types'] = 'gif|jpg|png|pdf|docx|excel'; 
      // $config['max_size']      = 1024;
      $this->load->library('upload', $config);
      $this->load->library('image_lib');
      $this->load->model("brochure_model"); 

      $data = array(
                    //save data via post  
                     "image_file"     =>$new_name
                   
                     
                );

       if ( ! $this->upload->do_upload('image')) {
         $error = array('error' => $this->upload->display_errors());
         echo "File size should be less than 1 MB"; 
         $this->load->view('brochure', $error); 
      }else { 



        $uploadedImage = $this->upload->data();
        $image = $uploadedImage['file_name'];


        $this->resizeImage($uploadedImage['file_name']);

        // $this->brochure_model->insert_data($data);

        // print_r('Image Uploaded Successfully.');
        // redirect(base_url() . "brochure"); 
      } 


                //Submit button name
                if($this->input->post("update"))  
                {  
                    //insert data
                     $this->brochure_model->update_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_brochure'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }



          


          public function view_brochure()
    {
    $this->load->model("brochure_model");  
    $data["fetch_data"] = $this->brochure_model->fetch_data(); 
      
      //include files
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/sidebar');
    $this->load->view('admin/brochure/view_brochure',$data);
    }

   /**
    * Manage uploadImage
    *
    * @return Response
   */

   public function uploadImage() { 

      $data1 = $_FILES["image"]["name"];
      $new_name = time().$_FILES["image"]['name'];
      $config['file_name'] = $new_name;
      $config['upload_path']   = './uploads/brochure/'; 
      $config['allowed_types'] = 'gif|jpg|png|pdf|docx|excel'; 
      // $config['max_size']      = 1024;
      $this->load->library('upload', $config);
      $this->load->library('image_lib');
      $this->load->model("brochure_model"); 

      $data = array(
                    //save data via post  
                     "image_file"     =>$new_name
                   
                     
                );

      if ( ! $this->upload->do_upload('image')) {
         $error = array('error' => $this->upload->display_errors());
         echo "File size should be less than 1 MB"; 
         // $this->load->view('brochure', $error); 
      }else { 



        $uploadedImage = $this->upload->data();
        $image = $uploadedImage['file_name'];


        $this->resizeImage($uploadedImage['file_name']);

        $this->brochure_model->insert_data($data);

        // print_r('Image Uploaded Successfully.');
        redirect(base_url() . "brochure"); 
      } 
   }


   /**
    * Manage uploadImage
    *
    * @return Response
   */
   public function resizeImage($filename)
   {
      $source_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/brochure/' . $filename;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/thumbnail/';
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


    
    function do_upload(){
    $name = $_FILES["image"]["name"];
    $ext = end((explode(".", $name))); # extra () to prevent notice
    
    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 0;
    
    $this->load->library('upload', $config);

    if( ! $this->upload->do_upload()){
        $error = array('error' => $this->upload->display_errors());

        $this->load->view('upload_form', $error);
    }
    else{
        $upload_data = $this->upload->data();

        #you can choose from
        /*
           Array(
                 [file_name]    => mypic.jpg
                 [file_type]    => image/jpeg
                 [file_path]    => /path/to/your/upload/
                 [full_path]    => /path/to/your/upload/jpg.jpg
                 [raw_name]     => mypic
                 [orig_name]    => mypic.jpg
                 [client_name]  => mypic.jpg
                 [file_ext]     => .jpg
                 [file_size]    => 22.2
                 [is_image]     => 1
                 [image_width]  => 800
                 [image_height] => 600
                 [image_type]   => jpeg
                 [image_size_str] => width="800" height="200"
          )
        */

        $this->brochure_model->insert_data($upoad_data['file_name'], $upoad_data['full_path']);

        $data = array('upload_data' => $this->upload->data());

        $this->load->view('upload_success', $data);
    }
}


}
