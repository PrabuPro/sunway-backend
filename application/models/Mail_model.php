<?php 
class Mail_model extends CI_model{

    public function mail($data){
        $this->db->insert('mails', $data);
        
        if($this->db->affected_rows() > 0)
            return $this->db->insert_id();
        else
            return false;
    }    

}

?>