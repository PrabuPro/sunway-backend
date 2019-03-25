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
     public function prices($number){
        $result = $this->db->select('price')
                           ->where('tour_id', $number)
                           ->get('tour_price')
                           ->result();
        
        return $result;
    }
     public function getTourNames(){
        $result = $this->db->select('tour_id,name')
                            ->order_by('tour_id','asc')
                           ->get('tours')
                           ->result();
        
        return $result;
    }

    //get update tour details
     public function getTour($tourId){
        
        $result = $this->db->select('t.*,h.*, i.*, p.*, se.*, si.*, so.*')
                           ->from('tours t')
                           ->where('t.tour_id', $tourId)
                           ->join('tour_highlights h', 'h.tour_id=t.tour_id', 'left')
                           ->join('itinerary i', 'i.tour_id=t.tour_id', 'left')
                           ->join('tour_item itm', 'itm.tour_id=t.tour_id', 'left')
                           ->join('tour_price p', 'p.tour_id=t.tour_id', 'left')
                           ->join('tour_services_excludes se', 'se.tour_id=t.tour_id', 'left')
                           ->join('tour_services_includes si', 'si.tour_id=t.tour_id', 'left')
                           ->join('tour_services_option so', 'so.tour_id=t.tour_id', 'left')
                           ->group_by('t.tour_id')
                           ->get()
                           ->result();
        return $result;
    }
     public function getTourImages($tourId){
        
        $result = $this->db->select('tour_id,photo_id,map_id')
                           ->where('tour_id', $tourId)
                           ->get('tours')
                           ->result();
        return $result;
    }

    public function getPrices($tourId){

        $result = $this->db->select('*')
                           ->where('tour_id',$tourId)
                           ->get('tour_price')
                           ->result();
        return $result;
    }

    public function getItineraries($tourId){

        $result = $this->db->select('*')
                           ->where('tour_id',$tourId)
                           ->get('itinerary')
                           ->result();
        return $result;


    }

    public function getIncludes($tourId){

        $result = $this->db->select('*')
                           ->where('tour_id',$tourId)
                           ->get('tour_services_includes')
                           ->result();
        return $result;


    }
    public function getExcludes($tourId){

        $result = $this->db->select('*')
                           ->where('tour_id',$tourId)
                           ->get('tour_services_excludes')
                           ->result();
        return $result;


    }
    public function getOptions($tourId){

        $result = $this->db->select('*')
                           ->where('tour_id',$tourId)
                           ->get('tour_services_option')
                           ->result();
        return $result;


    }
    public function getHighlights($tourId){

        $result = $this->db->select('*')
                           ->where('tour_id',$tourId)
                           ->get('tour_highlights')
                           ->result();
        return $result;


    }

    //Update
    public function update_tours($id,$data){
        $this->db->where('tour_id',$id);
        $this->db->update('tours',$data);
        
        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;
    }

    public function update_itinerary($id){

        $day = $this->input->post("day");
        $desc = $this->input->post("desc");

        $result = $this->db->select('itinerary_id')
                           ->where('tour_id',$id)
                           ->get('itinerary')
                           ->result();

        $itineraryId =  (int)(($result[0]->itinerary_id));

        $data = array();

        foreach($desc as $key => $value){
            $data[] = array(
                'itinerary_id' => $itineraryId++,
                'tour_id' => $id,
                'item_number' => $day[$key],
                'item_details' => $desc[$key]
            );
        }

        $this->db->update_batch('itinerary',$data,'itinerary_id');
        
       if ($this->db->affected_rows() >= '1')
        {
            return TRUE;
        }
        return FALSE;
    }

    public function update_price($id){

        $hotelType = $this->input->post("hotelType");
        $hotelPrice = $this->input->post("hotelPrice");
       

        $result = $this->db->select('tour_price_id')
                           ->where('tour_id',$id)
                           ->get('tour_price')
                           ->result();

        $priceId =  (int)(($result[0]->tour_price_id));

        $data = array();

        foreach($hotelType as $key => $value){
            $data[] = array(
                'tour_price_id' => $priceId++,
                'tour_id' => $id,
                'hotel_type' => $hotelType[$key],
                'price' => $hotelPrice[$key]
            );
        }

        $this->db->update_batch('tour_price',$data,'tour_price_id');
        
       if ($this->db->affected_rows() >= '1')
        {
            return TRUE;
        }
        return FALSE;
    }
    public function update_highlights($id){

        $highlights = $this->input->post("highlights");
       
        $result = $this->db->select('tour_highlights_id')
                           ->where('tour_id',$id)
                           ->get('tour_highlights')
                           ->result();

        $highlightsId =  (int)(($result[0]->tour_highlights_id));

        $data = array();

        foreach($highlights as $key => $value){
            $data[] = array(
                'tour_highlights_id' => $highlightsId++,
                'tour_id' => $id,
                'highlights' => $highlights[$key]
            );
        }

        $this->db->update_batch('tour_highlights',$data,'tour_highlights_id');
        
       if ($this->db->affected_rows() >= '1')
        {
            return TRUE;
        }
        return FALSE;
    }
    public function update_includes($id){

        $includes = $this->input->post("includes");
       
        $result = $this->db->select('tour_services_includes_id')
                           ->where('tour_id',$id)
                           ->get('tour_services_includes')
                           ->result();

        $includesId =  (int)(($result[0]->tour_services_includes_id));

        $data = array();

        foreach($includes as $key => $value){
            $data[] = array(
                'tour_services_includes_id' => $includesId++,
                'tour_id' => $id,
                'includes' => $includes[$key]
            );
        }

        $this->db->update_batch('tour_services_includes',$data,'tour_services_includes_id');
        
       if ($this->db->affected_rows() >= '1')
        {
            return TRUE;
        }
        return FALSE;
    }

    public function update_excludes($id){

        $excludes = $this->input->post("excludes");
       
        $result = $this->db->select('tour_services_excludes_id')
                           ->where('tour_id',$id)
                           ->get('tour_services_excludes')
                           ->result();

        $excludesId =  (int)(($result[0]->tour_services_excludes_id));

        $data = array();

        foreach($excludes as $key => $value){
            $data[] = array(
                'tour_services_excludes_id' => $excludesId++,
                'tour_id' => $id,
                'excludes' => $excludes[$key]
            );
        }

        $this->db->update_batch('tour_services_excludes',$data,'tour_services_excludes_id');
        
       if ($this->db->affected_rows() >= '1')
        {
            return TRUE;
        }
        return FALSE;
    }
    public function update_options($id){

        $options = $this->input->post("options");
       
        $result = $this->db->select('tour_services_option')
                           ->where('tour_id',$id)
                           ->get('tour_services_option')
                           ->result();

        $optionId =  (int)(($result[0]->tour_services_option));

        $data = array();

        foreach($options as $key => $value){
            $data[] = array(
                'tour_services_option' => $optionId++,
                'tour_id' => $id,
                'options' => $options[$key]
            );
        }

        $this->db->update_batch('tour_services_option',$data,'tour_services_option');
        
       if ($this->db->affected_rows() >= '1')
        {
            return TRUE;
        }
        return FALSE;
    }

}

?>