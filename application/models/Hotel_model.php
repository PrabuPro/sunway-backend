<?php 

class Hotel_model extends CI_Model{


    public function get_hotels($limit, $start){
        $this->db->select('hotel_id,name,,description, hotel_type,suitable_for,price,photo_id,location');
        $this->db->limit($limit, $start);
        $hotels = $this->db->get('hotels');

        return $hotels->result() ;
    }

    public function get_hotel($hotelsId){
        $hotels = $this->db->get('hotels');
        return $hotels->result() ;
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

     public function record_count(){
        return $this->db->count_all('hotels');
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
        if(!empty($country))
        $this->db->where('suitable_for', $suitable);
        if(!empty($suitable))
        $this->db->where('hotel_type', $hotel_type);
        if(!empty($hotel_type))
        $this->db->where('country', $country);
        $query = $this->db->get('hotels');

        return $query->result();
    }

    public function get_hotelItem($pageId){
        $this->db->select('hotel_id, name, hotel_type,suitable_for,price,photo_id,location,introduction');
        $this->db->where('hotel_id',$pageId);
        $query = $this->db->get('hotels');

        return $query->row();
    }

    public function get_hotelLocation($pageId){
        $this->db->select('lat, lng');
        $this->db->where('hotel_id',$pageId);
        $query = $this->db->get('hotel_location');

        return $query->row();
    }

    public function get_hotelFacilities($pageId){
        $this->db->select('facilities');
        $this->db->where('hotel_id',$pageId);
        $query = $this->db->get('hotel_facilities');

        return $query->row();
    }

    public function get_hotelRoomType($pageId){
        $this->db->select('room_type, people, children, price');
        $this->db->where('hotel_id',$pageId);
        $query = $this->db->get('hotel_roomType');

        return $query->result();
    }

      public function homeSearch($searchVal) {
        $this->db->where('hotel_type', $searchVal);
        $query = $this->db->get('hotels');

        return $query->result();
    }

      public function homeSearchCountry($searchVal) {
        $this->db->where('country', $searchVal);
        $query = $this->db->get('hotels');

        return $query->result();
    }

    
    

}

?>