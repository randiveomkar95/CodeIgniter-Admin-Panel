<?php 

class Brochure_model extends CI_Model
{
      function fetch_data()  
      {  
       $this->db->select("*");  
       $this->db->from("brochure");  
       $query = $this->db->get();  
       return $query;  
      }

      function insert_data($data)  
      {  
           $this->db->insert('brochure', $data);  
      } 

      function fetch_single_data($uid)  
      {  
           $query = $this->db->get_where('brochure', array('id' => $uid));
           return $query;
      }


          function update_data($data, $uid)  
      {  
        // print_r($data);

        $this->db->where('id', $uid);
        $this->db->update('brochure', $data);
        $updated_status = $this->db->affected_rows();
  
      }







}

 ?>