<?php 

class Tour_model extends CI_Model{


    public function get_tours(){
        $tours = $this->db->get('tours');
        return $tours->result() ;
    }

    public function get_tour($tourId){
        $tours = $this->db->get('tours');
        return $tours->result() ;
    }

    public function insert_tours($data){
        $query = $this->db->insert('tours', $data);
        return $this->db->insert_id();
    }

    public function insert_tour($data){
        $query = $this->db->insert('tour_item', $data);
        return $this->db->insert_id();
    }

    public function get_tourItem($pageId){
        // $query = $this->db->select('t1.name,t1.photo_id,t2.introduction,t2.lat,t2.lng')
        //             ->from('tours as t1')
        //             ->where('t1.tour_id', $pageId)
        //             ->join('tour_item as t2', 't1.tour_id=t2.tour_id', 'INNER')
        //             ->get();
        $id = (int)$pageId;
        $this->db->select('*');
        $this->db->from('tours');
        $this->db->join('tour_item', 'tour_item.tour_id = tours.tour_id');
        // $this->db->where('tours.tour_id', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function get_tourSuggessions($pageId){
        $query = $this->db->get_where('tours', array('tour_id' => $pageId), 1);
        
        //return tour type from above and get similar tour types

    }


    
}

?>