<?php 
class Inquiry_model extends CI_Model{
    
    public function insert_inquiry($data){
        $this->db->insert('inquiry', $data);
        
        if($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else{
            return false;
        }
    }

}



?>