<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class TourController extends CI_Controller{


    public function tours($pagenum){
       $config = array();
       $config["base_url"] = base_url() . "tours-list";
       $config["total_rows"] = $this->tour_model->record_count();
       $config["per_page"] = 8;
       $config["uri_segment"] = 1;
       $this->pagination->initialize($config);
       $page = ($this->uri->segment(1)) ? $this->uri->segment(1) : 0;

        $data['results'] = $this->tour_model->get_tours($config['per_page'], $pagenum);
        $data['links'] = $this->pagination->create_links();
        $data['total_pagination'] = $config["total_rows"]/$config["per_page"];
        $data['site_view'] = 'Tours';
        $data['site_title'] = 'Sunway Holidays - Tours';
        $this->load->view('main/main_view', $data);
    }

    public function tourPage(){
        $data['site_view'] = 'Tour-front';
        $data['site_title'] = 'Sunway Holidays - Tours';
        $data['recommended_tours'] = $this->tour_model->getRecommendedTours(1);
        $this->load->view('main/main_view', $data);
    }

    public function getTours(){

       $config = array();
       $config["base_url"] = base_url() . "tours";
       $config["total_rows"] = $this->Departments->record_count();
       $config["per_page"] = 5;
       $config["uri_segment"] = 3;
       $this->pagination->initialize($config);
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['results'] = $this->tour_model->get_tours($config['per_page'], $page);
        $data['links'] = $this->pagination->create_links();
        $data['site_view'] = 'Tours';
        $data['site_title'] = 'Sunway Holidays - Tours';
        $this->load->view('main/main_view', $data);
        
    }
    
    public function addToursView(){
        $data['site_view'] = 'AddTours';
        $data['site_title'] = 'Add Tours';
        $this->load->view('admin/dashboard', $data);
    }

    public function addTours(){

        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('introduction', 'Introduction', 'trim|required|max_length[700]');
        $this->form_validation->set_rules('tour_type', 'Tour_type', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('suitable_for', 'Suitable_for', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|integer|max_length[15]');
        $this->form_validation->set_rules('location', 'Location', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('day[]', 'Itinerary Day', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('desc[]', 'Itinerary Desc', 'trim|required|max_length[500]');
        $this->form_validation->set_rules('duration', 'Duration', 'trim|required|max_length[5]');
        $this->form_validation->set_rules('rating', 'Sunway Rating', 'trim|required|max_length[5]');


        if($this->form_validation->run() == FALSE){
             $dataflash = array(
                'errors' => validation_errors()
            );
            $this->session->set_flashdata($dataflash);
            $data['site_view'] = 'addTours';
            $this->load->view('admin/dashboard', $data);
        }

        else {

            $lastimage = $this->tour_model->getLastPhoto();

            $imageName = (int)$lastimage->tour_id + 1 ;

            $mapName = $imageName . '-m';

            //upload image and insert data into database
            if($this->imageUpload($imageName) && $this->imageUpload($mapName)){

            $path_photo = $_FILES['photo_id']['name'];
            $path_map = $_FILES['map_id']['name'];

            $photo_url = $imageName. '.'. pathinfo($path_photo, PATHINFO_EXTENSION);
            $map_url = $mapName. '.'. pathinfo($path_map, PATHINFO_EXTENSION);

            $databaseData = array(
                'name' => htmlspecialchars($this->input->post('name')),
                'description' => htmlspecialchars($this->input->post('description')),
                'tour_type' => htmlspecialchars($this->input->post('tour_type')),
                'suitable_for' => htmlspecialchars($this->input->post('suitable_for')),
                'price' => htmlspecialchars($this->input->post('price')),
                'photo_id' => $photo_url,
                'location' => htmlspecialchars($this->input->post('location')),
                'introduction' => htmlspecialchars($this->input->post('introduction')),
                'ratings' => htmlspecialchars($this->input->post('rating')),
                'duration' => htmlspecialchars($this->input->post('duration')),
                'map_id' => $map_url
            );

            //insert tour table
            $tourId = $this->tour_model->insert_tours($databaseData);


            $res = $this->tour_model->insert_itinerary($tourId);

            if($res){
                $dataflash = array(
                    'success' => 'Successfully Uploaded'
                );
    
                $this->session->set_flashdata($dataflash);
                $data['site_view'] = 'addTours';
                $this->load->view('admin/dashboard', $data);
                
            } else {
                    $dataflash = array(
                        'error' => 'Database error'
                    );
        
                    $this->session->set_flashdata($dataflash);
                    $data['site_view'] = 'addTours';
                    $this->load->view('admin/dashboard', $data);

            }

            } else {
                $data['site_view'] = 'addTours';
                $this->load->view('admin/dashboard', $data);
            }
        }
    }

    //function for uploading images
    public function imageUpload($imageName){

        $config['upload_path']          = './assets/images/tours/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $imageName;
        $config['max_size']             = 200000;
        $config['max_width']            = 1300;
        $config['max_height']           = 900;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo_id'))
        {
            $errors = array('errors' => $this->upload->display_errors());
            $this->session->set_flashdata($errors);
            //  $data['site_view'] = 'addTours';
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

    public function touritem($pageid){
        $data['results'] = $this->tour_model->get_tourItem($pageid);
        $data['itineraries'] = $this->tour_model->get_itinerary($pageid);
        $data['suggestions'] = $this->tour_model->suggestions(1);
        $data['site_view'] = 'TourItem';
        $data['site_title'] = 'Sunway Holidays - Tour Item';
        $this->load->view('main/main_view', $data);
    }

    public function getSearch() {
        
        $suitable = $this->input->post('suitable_for');
        $tour_type = $this->input->post('tour_type');
        $check_in_date = $this->input->post('check-in-date');
        $check_out_date = $this->input->post('check-out-date');

        if(empty($suitable) || empty($tour_type))
            redirect('tours-list/0'); 

        $data['results'] = $this->tour_model->search($suitable,$tour_type);

        $data['site_view'] = 'Tours';
        $data['site_title'] = 'Sunway Holidaya - Tours';
        $data['suitable'] = $suitable;
        $data['tour_type'] = $tour_type;
        $data['check_in_date'] = $check_in_date;
        $data['check_out_date'] = $check_out_date;

        $this->load->view('main/main_view', $data);

    }
    public function getHomeSearch() {
     
        $searchVal = $this->uri->segment(2);

        $data['results'] = $this->tour_model->homeSearch($searchVal);
        $data['total_pagination'] = 0;
        $data['tour_type'] = $searchVal;
        $data['site_view'] = 'Tours';
        $data['site_title'] = 'Sunway Holidays - Tours';

        $this->load->view('main/main_view', $data);

    }

    public function getHomeSearchFor() {
     
        $searchVal = $this->uri->segment(2);

        $data['results'] = $this->tour_model->homeSearchFor($searchVal);
        $data['total_pagination'] = 0;
        $data['tour_type'] = $searchVal;
        $data['site_view'] = 'Tours';
        $data['site_title'] = 'Sunway Holidays - Tours';

        $this->load->view('main/main_view', $data);

    }



        

    

}

?>