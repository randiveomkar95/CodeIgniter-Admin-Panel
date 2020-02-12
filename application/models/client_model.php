<?php  
 class Client_Model extends CI_Model  
 {   
      function insert_data($data)  
      {  
           $this->db->insert('client', $data);  
      } 

      function fetch_data()  
	   {  
	       $this->db->select("*");  
	       $this->db->from("client");  
	       $query = $this->db->get();  
	       return $query;  
	   }

       function fetch_single_data($uid)  
      {  
           $query = $this->db->get_where('client', array('id' => $uid));
           return $query;
      }	 

          function update_image_data($data, $uid)  
      {  
        // print_r($data);

        $this->db->where('id', $uid);
        $this->db->update('client', $data);
        $updated_status = $this->db->affected_rows();
  
      }

             function update_data($data, $uid)  
      {  
        // print_r($uid); exit();

        $this->db->where('id', $uid);
        $this->db->update('client', $data);
        $updated_status = $this->db->affected_rows();
  
      }


       function delete_data($id)
         {  
           $this->db->where("id", $id);  
           $this->db->delete("client");  
           //DELETE FROM client WHERE id = $id  
           }      
 }