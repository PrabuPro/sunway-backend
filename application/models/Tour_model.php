<?php 

class Tour_model extends CI_Model{


    public function get_tours($limit, $start){
        $this->db->select('tour_id,description, tour_type,suitable_for,price,photo_id,location');
        $this->db->limit($limit, $start);
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

    public function record_count(){
        return $this->db->count_all('tours');
    }

    public function get_tourItem($pageId){
        $this->db->select('tour_id, name, tour_type,suitable_for,price,photo_id,location,lat,lng,introduction');
        $this->db->where('tour_id',$pageId);
        $query = $this->db->get('tours');

        return $query->row();
    }

    public function get_itinerary($id){
        $this->db->where('tour_id', $id);
        $query = $this->db->get('itinerary');

        return $query->result();
    }

   

    public function insert_itinerary($id){

        $day = $this->input->post("day");
        $desc = $this->input->post("desc");
        $i = 0;

        if($desc){
            foreach($desc as $row){
                $data['tour_id'] = $id;
                $data['item_number'] = $day[$i];
                $data['item_details'] = $desc[$i];
                $this->db->insert("itinerary",$data);
                $i++;
            }
        }

       if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;
    }

    public function search($suitable, $tour_type) {
        $this->db->where('suitable_for', $suitable);
        $this->db->where('tour_type', $tour_type);
        $query = $this->db->get('tours');

        return $query->result();
    }

    public function homeSearch($searchVal) {
        $this->db->where('tour_type', $searchVal);
        $query = $this->db->get('tours');

        return $query->result();
    }

    public function homeSearchFor($searchVal) {
        $this->db->where('suitable_for', $searchVal);
        $query = $this->db->get('tours');

        return $query->result();
    }

}

?>