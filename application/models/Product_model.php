<?php  
 class Product_Model extends CI_Model  
 {   
      function insert_data($data)  
      {  
           $this->db->insert('product', $data);  
      } 
       function fetch_data()  
       {  
           $this->db->select("*");  
           $this->db->from("product"); 
           $this->db->group_by('title'); 
           $query = $this->db->get();  
           return $query;  
       }

      function fetch_product_all_data()  
       {  
           $this->db->select("*");  
           $this->db->from("product"); 
           $this->db->order_by("title", "asc"); 
           $query = $this->db->get();  
           return $query;  
       }

        function fetch_distinct_data()  
       {   
           $this->db->distinct("title");
           $this->db->select("*");  
           $this->db->from("product"); 
           $this->db->group_by('title'); 
           $query = $this->db->get();  
           return $query;  
       }

       function fetch_single_product_data($uid)  
      {    

        $t = urldecode($uid);
        $query = $this->db->get_where('product', array('title' => $t));
           return $query;
      }

      function fetch_single_product($uid)  
      {    

        $t = urldecode($uid);
        $query = $this->db->get_where('product', array('title' => $t));
           return $query;
      }

       function fetch_single_data($uid)  
      {  
           
          
           $query = $this->db->get_where('product', array('id' => $uid));
           
           return $query;
      }

          function update_image_data($data, $uid)  
      {  
        // print_r($data);

        $this->db->where('id', $uid);
        $this->db->update('product', $data);
        $updated_status = $this->db->affected_rows();
  
      }
       function update_data($data, $uid)  
      {  
        // print_r($uid); exit();

        $this->db->where('id', $uid);
        $this->db->update('product', $data);
        $updated_status = $this->db->affected_rows();
  
      }

       function delete_data($id)
         {  
           $this->db->where("id", $id);  
           $this->db->delete("product");  
           //DELETE FROM product WHERE id = $id  
           }

 }