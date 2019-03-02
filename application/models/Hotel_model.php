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

    
    public function getLastPhoto(){
        $lastImage = $this->db->select('hotel_id')
                              ->order_by('hotel_id','desc')
                              ->limit(1)
                              ->get('hotels')  
                              ->row();
        return $lastImage ;

    }

    public function getRecommendedHotels($number){
        $result = $this->db->select('hotel_id,name, description, price, photo_id, location')
                           ->where('sunway_ratings', $number)
                           ->order_by('sunway_ratings', 'desc')
                           ->limit(3)
                           ->get('hotels')
                           ->result();
        
        return $result;
    }

}

?>