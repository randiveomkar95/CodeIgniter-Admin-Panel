<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        // $username = $this->input->post('username');
        // $password = $this->input->post('password');
        // echo $username; 
        // echo $password; die;
        
        // Prep the query
        $this->load->library('session');
        $this->db->where('username', $username);
        $this->db->where('password', $password);


        $query = $this->db->query("SELECT * FROM admin WHERE username='$username' and password='$password'");
        if ($query->num_rows() > 0) {


            $row = $query->row();
            $data = array(
                    'userid' => $row->id,
                    'username' => $row->username,
                    'validated' => true
                    );
            $this->session->set_userdata($data);    
            // return true;






            return $query->result();
        } else {
            return NULL;
        }
        
    
        return false;
    }
}
?>