<?php 

class Tour_model extends CI_Model{


    public function get_tours($limit, $start){
        $this->db->select('tour_id,name,description, tour_type,suitable_for,photo_id');
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
        $this->db->select('tour_id, name, tour_type,suitable_for,photo_id,introduction,map_id');
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

    public function insert_price($id){

        $hotelType = $this->input->post("hotelType");
        $hotelPrice = $this->input->post("hotelPrice");
        $i = 0;

        if($hotelPrice){
            foreach($hotelPrice as $row){
                $data['tour_id'] = $id;
                $data['hotel_type'] = $hotelType[$i];
                $data['price'] = $hotelPrice[$i];
                $this->db->insert("tour_price",$data);
                $i++;
            }
        }

       if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;
    }

    public function insert_highlights($id){

        $highlights = $this->input->post("highlights");
        $i = 0;

        if($highlights){
            foreach($highlights as $row){
                $data['tour_id'] = $id;
                $data['highlights'] = $highlights[$i];
                $this->db->insert("tour_highlights",$data);
                $i++;
            }
        }

       if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;
    }

    public function insert_includes($id){

        $includes = $this->input->post("includes");
        $i = 0;

        if($includes){
            foreach($includes as $row){
                $data['tour_id'] = $id;
                $data['includes'] = $includes[$i];
                $this->db->insert("tour_services_includes",$data);
                $i++;
            }
        }

       if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;
    }
    public function insert_excludes($id){

        $excludes = $this->input->post("excludes");
        $i = 0;

        if($excludes){
            foreach($excludes as $row){
                $data['tour_id'] = $id;
                $data['excludes'] = $excludes[$i];
                $this->db->insert("tour_services_excludes",$data);
                $i++;
            }
        }

       if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;
    }
    public function insert_options($id){

        $options = $this->input->post("options");
        $i = 0;

        if($options){
            foreach($options as $row){
                $data['tour_id'] = $id;
                $data['options'] = $options[$i];
                $this->db->insert("tour_services_option",$data);
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

    public function getLastPhoto(){
        $lastImage = $this->db->select('tour_id')
                              ->order_by('tour_id','desc')
                              ->limit(1)
                              ->get('tours')  
                              ->row();
                              
        return $lastImage ;

    }

    public function suggestions($selection){
        if($selection == 1){
            $this->db->select('tour_id,name,description, tour_type,suitable_for,photo_id');
            $this->db->order_by('tour_id','RANDOM');
            $this->db->limit(3);
            $suggestions = $this->db->get('tours');

            return $suggestions->result();

        } else if ($selection == 2){
            $this->db->select('tour_id,name,description, tour_type,suitable_for,photo_id');
            $this->db->order_by('tour_id','RANDOM');
            $this->db->limit(2);
            $suggestions = $this->db->get('tours');

            return $suggestions->result();
        }
    }

     public function getRecommendedTours($number){
        $result = $this->db->select('tour_id,name,description, tour_type,suitable_for,photo_id')
                           ->where('ratings', $number)
                           ->order_by('ratings', 'desc')
                           ->limit(3)
                           ->get('tours')
                           ->result();
        
        return $result;
    }
     public function highlights($number){
        $result = $this->db->select('highlights')
                           ->where('tour_id', $number)
                           ->get('tour_highlights')
                           ->result();
        
        return $result;
    }
     public function includes($number){
        $result = $this->db->select('includes')
                           ->where('tour_id', $number)
                           ->get('tour_services_includes')
                           ->result();
        
        return $result;
    }
     public function excludes($number){
        $result = $this->db->select('excludes')
                           ->where('tour_id', $number)
                           ->get('tour_services_excludes')
                           ->result();
        
        return $result;
    }
     public function options($number){
        $result = $this->db->select('options')
                           ->where('tour_id', $number)
                           ->get('tour_services_option')
                           ->result();
        
        return $result;
    }


}

?>