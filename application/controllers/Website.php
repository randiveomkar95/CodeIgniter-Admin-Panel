<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model("logo_model");  
    $data["fetch_data"] = $this->logo_model->fetch_data(); 

    $this->load->model("brochure_model");  
    $data["fetch_brochure_data"] = $this->brochure_model->fetch_data();

    $this->load->model("header_model");  
    $data["fetch_header_data"] = $this->header_model->fetch_data(); 

    $this->load->model("slider_model");  
    $data["fetch_slider_data"] = $this->slider_model->fetch_data();

    $this->load->model("about_model");  
    $data["fetch_about_data"] = $this->about_model->fetch_data();

    $this->load->model("enquiry_model");  
    $data["fetch_enquiry_data"] = $this->enquiry_model->fetch_data();

    $this->load->model("product_model");  
    $data["fetch_product_all_data"] = $this->product_model->fetch_product_all_data();
    $data["fetch_product_data"] = $this->product_model->fetch_data();
    $data["fetch_distinct_data"] = $this->product_model->fetch_data();


    $this->load->model("service_model");  
    $data["fetch_service_data"] = $this->service_model->fetch_data();

    $this->load->model("service_model");  
    $data["fetch_service_limited_data"] = $this->service_model->fetch_data_limited();

    $this->load->model("testimonial_model");  
    $data["fetch_testimonial_data"] = $this->testimonial_model->fetch_data();

    $this->load->model("client_model");  
    $data["fetch_client_data"] = $this->client_model->fetch_data(); 

    $this->load->model("footer_model");  
    $data["fetch_footer_data"] = $this->footer_model->fetch_data();

    $this->load->model("infra_model");  
    $data["fetch_infra_data"] = $this->infra_model->fetch_data();

    $this->load->view('inc/header',$data);
  
  }

	public function index()
	{  

		$this->load->view('index');
		$this->load->view('inc/footer');

	}

  public function about_us()
  {  

    $this->load->view('about_us');
    $this->load->view('inc/footer');
    
  }

  public function service()
  {  

    $this->load->view('service');
    $this->load->view('inc/footer');
    
  }

  public function contact_us()
  {  

    $this->load->view('contact_us');
    $this->load->view('inc/footer');
    
  } 

  public function products($uid)
  {  
    $this->load->model("product_model"); 
    $data["fetch_single_product"] = $this->product_model->fetch_single_product($uid);
    $this->load->view('products',$data);
    $this->load->view('inc/footer');
    
  }


  public function gallery1()
  {  

    $this->load->view('gallery1');
    $this->load->view('inc/footer');
    
  } 
  
  public function infrastructure()
  {  

    $this->load->view('infrastructure');
    $this->load->view('inc/footer');
    
  }
  public function clients()
  {  

    $this->load->view('clients');
    $this->load->view('inc/footer');
    
  }

  public function insert_enquiry()  
        {  
                $this->load->model("enquiry_model");  
                $data = array(
                     "name"     =>$this->input->post("name"),
                     "email"     =>$this->input->post("email"),
                     "mobile"     =>$this->input->post("mobile"),
                     "enquiry_for"     =>$this->input->post("enquiry_for"),
                     "message"     =>$this->input->post("message")
                );  
                if($this->input->post("insert"))  
                {  
                     $this->enquiry_model->insert_data($data); 
                    $this->session->set_flashdata('success', "Thank you for contact with us..We will contact you shortly."); 
                     redirect(base_url() . 'contact_us'); 
                }  
             
             else  
             {   
                  $this->index();
             } 

             } 
            
  public function insert_vendor_enquiry()  
        {  
                $this->load->model("enquiry_model");  

           if(isset($_FILES['document']) && $_FILES['document']['error'] != '4') :
            $files = $_FILES;
            $count = count($_FILES['document']['name']); // count element 
            for($i=0; $i<$count; $i++):
                $_FILES['document']['name']= time().$files['document']['name'][$i];
                $_FILES['document']['type']= $files['document']['type'][$i];
                $_FILES['document']['tmp_name']= $files['document']['tmp_name'][$i];
                $_FILES['document']['error']= $files['document']['error'][$i];
                $_FILES['document']['size']= $files['document']['size'][$i];
                $config['upload_path'] = './uploads/vendor/';
                $target_path = '../uploads/vendor/thumbs/';
                // $config['encrypt_name'] = TRUE;
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|excel|docx|doc';
                // $config['max_size'] = '100000'; 
                $config['remove_spaces'] = true;
                $config['overwrite'] = false;
                // $config['max_width'] = '4000';
                // $config['max_height'] = '4000';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('document');

                $fileName = time().$files['document']['name'][$i];

                $data = array('upload_data' => $this->upload->data()); 
                if(!$this->upload->do_upload('document'))
                {
                   $error = array('upload_error' => $this->upload->display_errors());
                   $this->session->set_flashdata('error',  $error['upload_error']); 
                   echo $files['document']['name'][$i].' '.$error['upload_error']; exit;

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

                     "name"     =>$this->input->post("name"),
                     "email"     =>$this->input->post("email"),
                     "mobile"     =>$this->input->post("mobile"),
                     "company"     =>$this->input->post("company"),
                     'document' => $fileName,
                     "message"     =>$this->input->post("message")

                );

                $this ->db-> insert ('vendor',$image_upload); 
                         
            endfor;
        endif;

         redirect(base_url() . 'contact_us');   

          }

 

       


}