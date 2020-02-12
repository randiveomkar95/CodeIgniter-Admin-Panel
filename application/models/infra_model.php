<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Infra_model extends CI_Model {
    public function getRows($id = ''){
        $this->db->select('id,image,created');
        $this->db->from('infra');
        if($id){
            $this->db->where('id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('created','desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }    


    public function insert($data = array()){
        $insert = $this->db->insert_batch('infra',$data);
        return $insert?true:false;
    }   



    function fetch_data($id = '')  
       {  
           $this->db->select("*");  
           $this->db->from("infra");  
           $query = $this->db->get();  
           return $query;  
       }
           function delete_data($id)
         {  
           $this->db->where("id", $id);  
           $this->db->delete("infra");  
           //DELETE FROM about WHERE id = $id  
           }


}