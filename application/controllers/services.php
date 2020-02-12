<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function index(){

        $this->load->model("service_model");  
        $data["fetch_data"] = $this->service_model->fetch_data(); 
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/services/view_services',$data);
    }

    public function insert()  
        {  
                //include connection
                $this->load->model("service_model");  
                //form values


                  $image = $this->input->post('image');
                  $image_icon = $this->input->post('image_icon');

                  $image = '';
                  $image_icon = '';

                  if(!empty($_FILES['image']['name'])){
                      $image_path = "./uploads/services/";
                      $config['upload_path'] = $image_path;
                      $config['allowed_types'] = 'jpg|jpeg|png';
                      $config['file_name'] = $_FILES['image']['name'];
                      
                      //Load upload library and initialize configuration
                      $this->load->library('upload',$config);
                      $this->upload->initialize($config);
                      
                      if($this->upload->do_upload('image')){
                          $uploadData = $this->upload->data();
                          $image = $uploadData['file_name'];
                      }else{
                          $data = array(
                              'errors' => 'You Have To Upload Only JPEG OR JPG OR PNG Format Image'

                          );
                          $this->session->set_flashdata($data);

                          redirect($_SERVER['HTTP_REFERER']);

                      }
                  }else{
                      $image = $drawing_img;
                  }
                  
                 
                  if(!empty($_FILES['image_icon']['name'])){
                      $image_path = "./uploads/services/";
                      $config['upload_path'] = $image_path;
                      $config['allowed_types'] = 'jpg|jpeg|png';
                      $config['file_name'] = $_FILES['image_icon']['name'];
                      
                      //Load upload library and initialize configuration
                      $this->load->library('upload',$config);
                      $this->upload->initialize($config);
                      
                      if($this->upload->do_upload('image_icon')){
                          $uploadData = $this->upload->data();
                          $image_icon = $uploadData['file_name'];
                      }else{
                          $data = array(
                              'errors' => 'You Have To Upload Only JPEG OR JPG OR PNG Format Image'

                          );
                          $this->session->set_flashdata($data);

                          redirect($_SERVER['HTTP_REFERER']);
                      }
                  }else{
                      $image_icon = $drawing_img2;
                  }




























                $data = array(
                    //save data via post  
                     "title"       =>$this->input->post("title"),
                     "image"       =>$image,
                     "image_icon"  =>$image_icon 
                );  

           
                //Submit button name
                if($this->input->post("insert"))  
                {  
                    //insert data
                     $this->service_model->insert_data($data); 
                     $this->session->set_flashdata('true', 'Service added Successfully');

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_services'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

                public function resizeImage($filename)
                       {
                          $source_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/services/' . $filename;
                          $target_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/services/thumbnail/' . $filename;
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

    public function add_services(){

    	$this->load->view("admin/inc/header");
    	$this->load->view("admin/inc/sidebar");
    	$this->load->view("admin/services/add_services");

    }

       public function edit_services($uid){
            $this->load->model("service_model"); 
            $data["fetch_single_data"] = $this->service_model->fetch_single_data($uid);

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/services/edit_services', $data);

    }

    public function view_services(){

           $this->load->model("service_model");  
           $data["fetch_data"] = $this->service_model->fetch_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/services/view_services',$data);

      //include files
  
    // $this->load->view('');

    }


         public function update_image()  
        {  
                //include connection
                $this->load->model("service_model");  
                $uid = $this->input->post("hidden_id");
                //form values
               
      $data1 = $_FILES["image"]["name"];
      $new_name = time().$_FILES["image"]['name'];
      $config['file_name'] = $new_name;
      $config['upload_path']   = './uploads/services/'; 
      $config['allowed_types'] = 'gif|jpg|png'; 
      $config['max_size']      = 1024;
      $this->load->library('upload', $config);
      $this->load->library('image_lib');
      $this->load->model("service_model"); 

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
                     $this->service_model->update_image_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_services'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

                   public function update_image1()  
        {  
                //include connection
                $this->load->model("service_model");  
                $uid = $this->input->post("hidden_id");
                //form values
               
      $data1 = $_FILES["image_icon"]["name"];
      $new_name1 = time().$_FILES["image_icon"]['name'];
      $config['file_name'] = $new_name1;
      $config['upload_path']   = './uploads/services/'; 
      $config['allowed_types'] = 'gif|jpg|png'; 
      $config['max_size']      = 1024;
      $this->load->library('upload', $config);
      $this->load->library('image_lib');
      $this->load->model("service_model"); 

      $data = array(
                    //save data via post  
                     "image_icon"     =>$new_name1
                   
                     
                );

       if ( ! $this->upload->do_upload('image_icon')) {
         $error = array('error' => $this->upload->display_errors());
         echo "File size should be less than 1 MB"; 
         $this->load->view('service', $error); 
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
                     $this->service_model->update_image_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_services'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

                  public function update_data()  
        {  
                //include connection
                $this->load->model("service_model");  
                $uid = $this->input->post("hidden_id");
                //form values
                $data = array(
                    //save data via post  
                     "title"        =>$this->input->post("title")
                   
                );  
                //Submit button name
                if($this->input->post("update"))  
                {  
                    //insert data
                     $this->service_model->update_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_services'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

           public function delete_data($id)
            {  
                 echo $id;
               $this->load->model("service_model");  
               $this->service_model->delete_data($id);  
               redirect(base_url() . "view_services");  
            }

}