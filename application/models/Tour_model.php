<?php 

class Tour_model extends CI_Model{

    public function get_tours(){
        $tours = $this->db->get('tours');
        return $tours->result();
    }

}


?>