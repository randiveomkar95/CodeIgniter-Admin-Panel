<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Infra extends CI_Controller {
    function  __construct() {
        parent::__construct();
        $this->load->model('infra_model');
    }    
    function index(){
              $this->load->model("infra_model");  
           $data["fetch_data"] = $this->infra_model->fetch_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
 
           $this->load->view('admin/infra/view_infra',$data);
       
    }

        function insert(){
         $data = array();
        if($this->input->post('submitForm') && !empty($_FILES['upload_Files']['name'])){
            $filesCount = count($_FILES['upload_Files']['name']);
            for($i = 0; $i < $filesCount; $i++){ $_FILES['upload_File']['name'] = $_FILES['upload_Files']['name'][$i]; $_FILES['upload_File']['type'] = $_FILES['upload_Files']['type'][$i]; $_FILES['upload_File']['tmp_name'] = $_FILES['upload_Files']['tmp_name'][$i]; $_FILES['upload_File']['error'] = $_FILES['upload_Files']['error'][$i]; $_FILES['upload_File']['size'] = $_FILES['upload_Files']['size'][$i]; $uploadPath = './uploads/infra/'; $config['upload_path'] = $uploadPath; $config['allowed_types'] = 'gif|jpg|png'; $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('upload_File')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['image'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }            
            if(!empty($uploadData)){
                //Insert file information into the database
                $insert = $this->infra_model->insert($uploadData);
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }
        //Get files data from database
        // $data['infra'] = $this->infra_model->getRows();
        //Pass the files data to view

        redirect(base_url() . 'view_infra'); 
    }

    function add_infra(){
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/infra/add_infra');
    }

        public function view_infra(){

           $this->load->model("infra_model");  
           $data["fetch_data"] = $this->infra_model->fetch_data();  

            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
 
           $this->load->view('admin/infra/view_infra',$data);

      //include files
  
    // $this->load->view('');

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
                $config['upload_path'] = './uploads/infra/';
                $target_path = './uploads/infra/thumbs/';
                // $config['encrypt_name'] = TRUE;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                // $config['max_size'] = '100000'; 
                $config['remove_spaces'] = true;
                $config['overwrite'] = false;
                // $config['max_width'] = '4000';
                // $config['max_height'] = '4000';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('userfile');

                $fileName = time().$files['userfile']['name'][$i];

                $data = array('upload_data' => $this->upload->data()); 
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
                  'name'  =>$this->input->post('name')

                );
                $this ->db-> insert ('infra',$image_upload); 
                         
            endfor;
        endif;
        redirect(base_url() . "view_infra");  
        // redirect(site_url('view_infra'));
    }


      public function delete_data($id)
            {  
              //echo $id;
               $this->load->model("infra_model");  
               $this->infra_model->delete_data($id);  
               redirect(base_url() . "view_infra");  
            } 
}