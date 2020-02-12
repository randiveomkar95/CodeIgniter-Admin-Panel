<?php  
 class Service_Model extends CI_Model  
 {   
      function insert_data($data)  
      {  
           $this->db->insert('service', $data);  
      } 
       function fetch_data()  
       {  
           $this->db->select("*");
           $this->db->from("service"); 
           $this->db->order_by("title", "asc"); 
           $query = $this->db->get();  
           return $query;  
       }

       function fetch_data_limited()  
       {  
           $this->db->select("*");  
           $this->db->from("service"); 
           $this->db->order_by("title", "asc");  
           $this->db->limit("6");  
           $query = $this->db->get();  
           return $query;  
       }

       function fetch_single_data($uid)  
      {  
           $query = $this->db->get_where('service', array('id' => $uid));
           return $query;
      }

          function update_image_data($data, $uid)  
      {  
        // print_r($data);

        $this->db->where('id', $uid);
        $this->db->update('service', $data);
        $updated_status = $this->db->affected_rows();
  
      }
       function update_data($data, $uid)  
      {  
        // print_r($uid); exit();

        $this->db->where('id', $uid);
        $this->db->update('service', $data);
        $updated_status = $this->db->affected_rows();
  
      }

       function delete_data($id)
         {  
           $this->db->where("id", $id);  
           $this->db->delete("service");  
           //DELETE FROM service WHERE id = $id  
           }

 }