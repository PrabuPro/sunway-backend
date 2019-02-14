<?php 

class Hotel_model extends CI_Model{


    public function get_hotels(){
        $tours = $this->db->get('hotels');
        return $tours->result() ;
    }

    public function get_hotel($hotelsId){
        $tours = $this->db->get('hotels');
        return $tours->result() ;
    }

    public function insert_hotels($data){
        $query = $this->db->insert('hotels', $data);
        return $this->db->insert_id();
    }

    public function insert_locations($data){
        $query = $this->db->insert('hotel_location', $data);
        return true;
    }

    public function insert_facilities($data){
        $query = $this->db->insert('hotel_facilities', $data);
        return true;
    }

    public function insert_roomtype($id) {
        $roomType = $this->input->post("room_type");
        $people = $this->input->post("people");
        $children= $this->input->post("children");
        $price= $this->input->post("room_price");
        $i = 0;

        if($roomType){
            foreach($roomType as $row){
                $data['hotel_id'] = $id;
                $data['room_type'] = $roomType[$i];
                $data['people'] = $people[$i];
                $data['children'] = $children[$i];
                $data['price'] = $price[$i];
                $this->db->insert("hotel_roomType",$data);
                $i++;
            }
        }

       if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;
    }

    // public function insert_tour($data){
    //     $query = $this->db->insert('tour_item', $data);
    //     return $this->db->insert_id();
    // }

    // public function get_tourItem($pageId){
    //     // $query = $this->db->select('t1.name,t1.photo_id,t2.introduction,t2.lat,t2.lng')
    //     //             ->from('tours as t1')
    //     //             ->where('t1.tour_id', $pageId)
    //     //             ->join('tour_item as t2', 't1.tour_id=t2.tour_id', 'INNER')
    //     //             ->get();
    //     $id = (int)$pageId;
    //     $this->db->select('*');
    //     $this->db->from('tours');
    //     $this->db->join('tour_item', 'tour_item.tour_id = tours.tour_id');
    //     // $this->db->where('tours.tour_id', $id);
    //     $query = $this->db->get();

    //     return $query->row();
    // }

    // public function get_tourSuggessions($pageId){
    //     $query = $this->db->get_where('tours', array('tour_id' => $pageId), 1);
        
    //     //return tour type from above and get similar tour types

    // }

    public function search($country, $suitable, $hotel_type) {
        $this->db->where('suitable_for', $suitable);
        $this->db->where('hotel_type', $hotel_type);
        $this->db->where('country', $country);
        $query = $this->db->get('hotels');

        return $query->result();
    }

}

?>