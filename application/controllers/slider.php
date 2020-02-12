<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

       public function index(){

        $this->load->model("slider_model");  
        
        $data["fetch_data"] = $this->slider_model->fetch_data();  

        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/slider/view_slider',$data);
    }



        public function add_slider(){

    	  $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/slider/add_slider');
    }

       public function edit_slider($uid){

        $this->load->model("slider_model"); 
        $data["fetch_single_data"] = $this->slider_model->fetch_single_data($uid);

        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/slider/edit_slider', $data);

    }


                  public function update_data()  
        {  
                //include connection
                $this->load->model("slider_model");  
                $uid = $this->input->post("hidden_id");
                //form values
                $data = array(
                    //save data via post  
                     "name"        =>$this->input->post("name"),
                     "content"  =>$this->input->post("content")
                   
                     
                );  
                //Submit button name
                if($this->input->post("update"))  
                {  
                    //insert data
                     $this->slider_model->update_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_slider'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

        public function view_slider(){


        $this->load->model("slider_model");  
        
        $data["fetch_data"] = $this->slider_model->fetch_data();  

        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/slider/view_slider',$data);
    }

     public function insert()  
        {  
                //include connection
                $this->load->model("slider_model");  
                //form values

                  $data1 = $_FILES["image"]["name"];
                  $new_name = time().$_FILES["image"]['name'];
                  $config['file_name'] = $new_name;
                  $config['upload_path']   = './uploads/slider/'; 
                  $config['allowed_types'] = 'gif|jpg|png'; 
                  $config['max_size']      = 1024;
                  $this->load->library('upload', $config);
                  $this->load->library('image_lib');
                  $this->load->model("slider_model"); 

                $data = array(
                    //save data via post  
                     "name"     =>$this->input->post("name"),
                     "content"     =>$this->input->post("content"),
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
                     $this->slider_model->insert_data($data); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_slider'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

                public function resizeImage($filename)
                       {
                          $source_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/slider/' . $filename;
                          $target_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/slider/thumbnail/' . $filename;
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



	               //UPDATE IMAGE:

	                public function update_image()  
					{  
				        //include connection
				        $this->load->model("slider_model");  
				        $uid = $this->input->post("hidden_id");
				        //form values
				       
						$data1 = $_FILES["image"]["name"];
						$new_name = time().$_FILES["image"]['name'];
						$config['file_name'] = $new_name;
						$config['upload_path']   = './uploads/slider/'; 
						$config['allowed_types'] = 'gif|jpg|png'; 
						$config['max_size']      = 1024;
						$this->load->library('upload', $config);
						$this->load->library('image_lib');
						$this->load->model("slider_model"); 

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
				             $this->slider_model->update_image_data($data,$uid); 

				             //redirect to 
				             // redirect(base_url() . "about/view_about"); 
				             redirect(base_url() . 'view_slider'); 
				        }  
				     
				     else  
				     {    //return to
				          $this->index();  
				     }  
				  }

    	public function delete_data($id)
            {  
                 echo $id;
               $this->load->model("slider_model");  
               $this->slider_model->delete_data($id);  
               redirect(base_url() . "view_slider");  
            }

	}