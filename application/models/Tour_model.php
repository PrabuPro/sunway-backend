<?php 

class Tour_model extends CI_Model{

    // public function get_tours(){
    //     header("Content-Type: application/json");
    //     $tours = $this->db->get('tours');
    //     return json_encode($tours->result()) ;
    // }
    public function get_tours(){
        $tours = $this->db->get('tours');
        return $tours->result() ;
    }
}


?>