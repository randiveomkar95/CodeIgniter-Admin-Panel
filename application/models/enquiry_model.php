<?php  
 class Enquiry_Model extends CI_Model  
 {   
      function insert_data($data)  
      {  
           $this->db->insert('enquiry', $data);  
      }  

       function fetch_data()  
       {  
           $this->db->select("*");  
           $this->db->from("enquiry"); 
           $this->db->order_by("id", "DESC"); 
           $query = $this->db->get();  
           return $query;  
       }

      function fetch_vendor_data()  
       {  
           $this->db->select("*");  
           $this->db->from("vendor"); 
           $this->db->order_by("id", "DESC"); 
           $query = $this->db->get();  
           return $query;  
       }

      function fetch_single_data($uid)  
      {  
           $query = $this->db->get_where('enquiry', array('id' => $uid));
           return $query;
      }

       function delete_data($id)
       {  
         $this->db->where("id", $id);  
         $this->db->delete("enquiry");  
         }

       function delete_vendor_data($id)
       {  
         $this->db->where("id", $id);  
         $this->db->delete("vendor");  
         }

 }  