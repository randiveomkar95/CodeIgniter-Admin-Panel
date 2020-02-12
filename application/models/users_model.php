<?php
class Users_model extends CI_Model
{
    public function get_image($user_id)
    {
        $sql = "SELECT * FROM galleryone WHERE user_id='$user_id' order by id DESC";
        $result = $this->db->query($sql)->result();        
        return $result; 
    }  

}