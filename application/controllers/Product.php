<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {




    public function index(){

        $this->load->model("product_model");  
        $data["fetch_data"] = $this->product_model->fetch_data(); 
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/product/view_product',$data);
    }
  

    public function insert()  
        {  
                //include connection
                $this->load->model("product_model");  
                //form values

                  $data1 = $_FILES["image"]["name"];
                  $new_name = time().$_FILES["image"]['name'];
                  $config['file_name'] = $new_name;
                  $config['upload_path']   = './uploads/product/'; 
                  $config['allowed_types'] = 'gif|jpg|png'; 
                  $config['max_size']      = 1024;
                  $this->load->library('upload', $config);
                  $this->load->library('image_lib');
                  $this->load->model("product_model"); 

                $data = array(
                    //save data via post  
                     "title"     =>$this->input->post("title"),
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
                     $this->product_model->insert_data($data); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_product'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

    public function upload_multiple()
    {
        // $user_id = 1234;
         // session or user_id       
        if(isset($_FILES['userfile']) && $_FILES['userfile']['error'] != '4') :
            $files = $_FILES;
            $count = count($_FILES['userfile']['name']); // count element 
            for($i=0; $i<$count; $i++):
                $_FILES['userfile']['name']= time().$files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];
                $config['upload_path'] = './uploads/gallary/';
                $target_path = './uploads/product/';
                // $config['encrypt_name'] = TRUE;
                $config['allowed_types'] = '*';
                // $config['max_size'] = '100000'; 
                $config['remove_spaces'] = true;
                $config['overwrite'] = false;
                // $config['max_width'] = '4000';
                // $config['max_height'] = '4000';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('userfile');

                $fileName = time().$files['userfile']['name'][$i];

                $data = array(

                  'upload_data'  => $this->upload->data()



              ); 
                if(!$this->upload->do_upload('userfile'))
                {
                   $error = array('upload_error' => $this->upload->display_errors());
                   $this->session->set_flashdata('error',  $error['upload_error']); 
                   echo $files['userfile']['name'][$i].' '.$error['upload_error']; exit;

                } // resize code
                $path=$data['upload_data']['full_path'];
                 $q['name']=$data['upload_data']['file_name'];
                 $configi['image_library'] = 'gd2';
                 $configi['source_image']   = $path;
                 $configi['new_image']   = $target_path;
                 $configi['maintain_ratio'] = False;
                 $configi['width']  = '300'; // new size
                 $configi['height'] = '300';
                $this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
                $images[] = $fileName;
                $image_upload = array(

                  'image' => $fileName,
                  "title"     =>$this->input->post("title"),
                  "description"     =>$this->input->post("description")


              );
                $this ->db-> insert ('product',$image_upload); 
                         
            endfor;
        endif;
        redirect(base_url() . "view_product");  
        // redirect(site_url('view_gallary'));
    }

                public function resizeImage($filename)
                       {
                          $source_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/product/' . $filename;
                          $target_path = $_SERVER['DOCUMENT_ROOT'] . './uploads/product/thumbnail/' . $filename;
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

    public function add_product(){

    	$this->load->view("admin/inc/header");
    	$this->load->view("admin/inc/sidebar");
    	$this->load->view("admin/product/add_product");

    }

       public function edit_product($uid){
            $this->load->model("product_model"); 
            $data["fetch_single_data"] = $this->product_model->fetch_single_data($uid);

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/product/edit_product', $data);

    }

           public function edit_product_image($uid){
            $this->load->model("product_model"); 
            $data["fetch_single_data"] = $this->product_model->fetch_single_data($uid);

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/product/edit_product_image', $data);

    }

    public function view_product(){

           $this->load->model("product_model");  
           $data["fetch_data"] = $this->product_model->fetch_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/product/view_product',$data);

    }

        public function view_product_images($uid){
           // print_r($uid); die;
           $this->load->model("product_model");  
           $data["fetch_single_product_data"] = $this->product_model->fetch_single_product_data($uid);  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/product/view_product_images',$data);

    }



            public function view_single_product_images($uid){
           print_r($uid); die;
           $this->load->model("product_model");  
           $data["fetch_single_product_data"] = $this->product_model->fetch_single_product_data($uid);  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/product/view_product_images',$data);

    }

    




         public function update_image()  
        {  
                //include connection
                $this->load->model("product_model");  
                $uid = $this->input->post("hidden_id");
                //form values
               
      $data1 = $_FILES["image"]["name"];
      $new_name = time().$_FILES["image"]['name'];
      $config['file_name'] = $new_name;
      $config['upload_path']   = './uploads/product/'; 
      $config['allowed_types'] = 'gif|jpg|png'; 
      $config['max_size']      = 1024;
      $this->load->library('upload', $config);
      $this->load->library('image_lib');
      $this->load->model("product_model"); 

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
                     $this->product_model->update_image_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_product'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }


           public function update_product_image()  
        {  
                //include connection
                $this->load->model("product_model");  
                $uid = $this->input->post("hidden_id");
                $p_title = $this->input->post("hidden_id1");
                //form values
               
      $data1 = $_FILES["image"]["name"];
      $new_name = time().$_FILES["image"]['name'];
      $config['file_name'] = $new_name;
      $config['upload_path']   = './uploads/product/'; 
      $config['allowed_types'] = 'gif|jpg|png'; 
      $config['max_size']      = 1024;
      $this->load->library('upload', $config);
      $this->load->library('image_lib');
      $this->load->model("product_model"); 

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
                     $this->product_model->update_image_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     $link = 'view_single_product_images/'.$p_title;
                     redirect(base_url() . $link); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

                  public function update_data()  
        {  
                //include connection
                $this->load->model("product_model");  
                $uid = $this->input->post("hidden_id");
                //form values
                $data = array(
                    //save data via post  
                     "title"        =>$this->input->post("title"),
                     "description"  =>$this->input->post("description")
                   
                     
                );  
                //Submit button name
                if($this->input->post("update"))  
                {  
                    //insert data
                     $this->product_model->update_data($data,$uid); 

                     //redirect to 
                     // redirect(base_url() . "about/view_about"); 
                     redirect(base_url() . 'view_product'); 
                }  
             
             else  
             {    //return to
                  $this->index();  
             }  
          }

           public function delete_data($id)
            {  
                 echo $id;
               $this->load->model("product_model");  
               $this->product_model->delete_data($id);  
               redirect(base_url() . "view_product");  
            }

}