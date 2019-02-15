<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelController extends CI_Controller{

    public function accomadations($pagenum){

       $config = array();
       $config["base_url"] = base_url() . "accomadations-list";
       $config["total_rows"] = $this->hotel_model->record_count();
       $config["per_page"] = 8;
       $config["uri_segment"] = 1;
       $this->pagination->initialize($config);
       $page = ($this->uri->segment(1)) ? $this->uri->segment(1) : 0;

        $data['results'] = $this->hotel_model->get_hotels($config['per_page'], $pagenum);
        $data['links'] = $this->pagination->create_links();
        $data['total_pagination'] = $config["total_rows"]/$config["per_page"];

        $data['site_view'] = 'Accomadations';
        $data['site_title'] = 'Sunway Holidays - Accomadations';
        $this->load->view('main/main_view', $data);

    }
    
    public function addHotelsView(){
        $data['site_view'] = 'AddHotels';
        $data['site_title'] = 'Add Hotels';
        $this->load->view('admin/dashboard', $data);
    }

     public function addHotels(){
        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('hotel_type', 'Hotel_type', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('suitable_for', 'Suitable_for', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|integer|max_length[15]');
        $this->form_validation->set_rules('location', 'Location', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('lat', 'Lat', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('lng', 'Lng', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('facility[]', 'Facility', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('room_type[]', 'Room Type', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('people[]', 'People', 'trim|required|max_length[5]');
        $this->form_validation->set_rules('children[]', 'Children', 'trim|required|max_length[5]');
        $this->form_validation->set_rules('room_price[]', 'Room Price', 'trim|required|max_length[8]');

        if($this->form_validation->run() == FALSE){
             $dataflash = array(
                'errors' => validation_errors()
            );
            $this->session->set_flashdata($dataflash);
            $data['site_view'] = 'addHotels';
            $this->load->view('admin/dashboard', $data);
        }

        else {

            //upload image and insert data into database
            if($this->imageUpload()){

            $photo_url = base_url().'assets/images/hotels/'.$_FILES['photo_id']['name'];

            $databaseData = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'hotel_type' => $this->input->post('hotel_type'),
                'suitable_for' => $this->input->post('suitable_for'),
                'price' => $this->input->post('price'),
                'photo_id' => $photo_url,
                'location' => $this->input->post('location'),
                'country' => $this->input->post('country')
            );

            //insert Hotel table
            $hotelId = $this->hotel_model->insert_hotels($databaseData);

            //insert locations
            $dataLocations = array (
                'hotel_id' => $hotelId,
                'lat' => $this->input->post('lat'),
                'lng' => $this->input->post('lng')
            );

            $locations = $this->hotel_model->insert_locations($dataLocations);
            
            //intert facilities
            $facilities = implode(",",$this->input->post('facility'));
            $dataFacilities = array (
                'hotel_id' => $hotelId,
                'facilities' => $facilities
            );

            $facilities = $this->hotel_model->insert_facilities($dataFacilities);

            $room_type = $this->hotel_model->insert_roomtype($hotelId);
            

            $dataflash = array(
                'success' => 'Successfully Uploaded'
            );

            $this->session->set_flashdata($dataflash);
            $data['site_view'] = 'addHotels';
            $this->load->view('admin/dashboard', $data);

            } else {
                $data['site_view'] = 'addHotels';
                $this->load->view('admin/dashboard', $data);
            }
        }
    }

    //function for uploading images
    public function imageUpload(){

        $config['upload_path']          = './assets/images/hotels/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 200000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo_id'))
        {
            $errors = array('errors' => $this->upload->display_errors());
            $this->session->set_flashdata($errors);
            //  $data['site_view'] = 'addHotels';
            // $this->load->view('admin/dashboard', $data);
            return FALSE;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('success', $data);
            return TRUE;
        }
    }

    public function hotelitem($pageid){
        $data['results'] = $this->hotel_model->get_hotelItem($pageid);
        $data['location'] = $this->hotel_model->get_hotelLocation($pageid);
        $data['facilities'] = $this->hotel_model->get_hotelFacilities($pageid);
        $data['room_types'] = $this->hotel_model->get_hotelRoomType($pageid);
        
        $data['site_view'] = 'HotelItem';
        $data['site_title'] = 'Sunway Holidays - Hotel Item';
        $this->load->view('main/main_view', $data);
    
    }

    public function getSearch() {
        
        $country = $this->input->post('country');
        $suitable = $this->input->post('suitable_for');
        $hotel_type = $this->input->post('hotel_type');
        $check_in_date = $this->input->post('check-in-date');
        $check_out_date = $this->input->post('check-out-date');

        if(empty($suitable) || empty($hotel_type))
            redirect('accomadations'); 

        $data['results'] = $this->hotel_model->search($country,$suitable,$hotel_type);

        $data['site_view'] = 'Accomadations';
        $data['site_title'] = 'Accomadations';
        $data['country'] = $country;
        $data['suitable'] = $suitable;
        $data['total_pagination'] = 0;
        $data['hotel_type'] = $hotel_type;
        $data['check_in_date'] = $check_in_date;
        $data['check_out_date'] = $check_out_date;

        $this->load->view('main/main_view', $data);

    }

    public function getHomeSearch() {
     
        $searchVal = urldecode($this->uri->segment(2));

        $data['results'] = $this->hotel_model->homeSearch($searchVal);
        $data['total_pagination'] = 0;
        $data['tour_type'] = $searchVal;
        $data['site_view'] = 'Accomadations';
        $data['site_title'] = 'Sunway Holidays - Accomadations';

        $this->load->view('main/main_view', $data);

    }

    public function getHomeSearchCountry() {
     
        $searchVal = urldecode($this->uri->segment(2));

        $data['results'] = $this->hotel_model->homeSearchCountry($searchVal);
        $data['total_pagination'] = 0;
        $data['tour_type'] = $searchVal;
        $data['site_view'] = 'Accomadations';
        $data['site_title'] = 'Sunway Holidays - Accomadations';

        $this->load->view('main/main_view', $data);

    }

}

?>