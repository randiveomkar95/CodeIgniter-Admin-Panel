<?php 

class Logo_model extends CI_Model
{
      function fetch_data()  
      {  
       $this->db->select("*");  
       $this->db->from("logo");  
       $query = $this->db->get();  
       return $query;  
      }

      function insert_data($data)  
      {  
           $this->db->insert('logo', $data);  
      } 

      function fetch_single_data($uid)  
      {  
           $query = $this->db->get_where('logo', array('id' => $uid));
           return $query;
      }


          function update_data($data, $uid)  
      {  
        // print_r($data);

        $this->db->where('id', $uid);
        $this->db->update('logo', $data);
        $updated_status = $this->db->affected_rows();
  
      }







}

 ?>