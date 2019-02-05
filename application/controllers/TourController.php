<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class TourController extends CI_Controller{
    public function tours(){
        $data['results'] = $this->tour_model->get_tours();
        $data['site_view'] = 'Tours';
        $data['site_title'] = 'Tours';
        $this->load->view('main/main_view', $data);
    }

    public function getTours(){

        $data['results'] = $this->tour_model->get_tours();
        $data['site_view'] = 'Tours';
        $data['site_title'] = 'Tours';
        $this->load->view('main/main_view', $data);
        
    }
    
    public function addToursView(){
        $data['site_view'] = 'AddTours';
        $data['site_title'] = 'Add Tours';
        $this->load->view('main/main_view', $data);

    }

    public function addTours(){

        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('tour_type', 'Tour_type', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('suitable_for', 'Suitable_for', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|integer|max_length[15]');
        $this->form_validation->set_rules('location', 'Location', 'trim|required|max_length[15]');

        if($this->form_validation->run() == FALSE){
             $dataflash = array(
                'errors' => validation_errors()
            );
            $this->session->set_flashdata($dataflash);
            $data['site_view'] = 'addTours';
            $this->load->view('admin/dashboard', $data);
        }

        else {

            //upload image and insert data into database
            if($this->imageUpload()){

            $photo_url = base_url().'assets/images/tours/'.$_FILES['photo_id']['name'];

            $databaseData = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'tour_type' => $this->input->post('tour_type'),
                'suitable_for' => $this->input->post('suitable_for'),
                'price' => $this->input->post('price'),
                'photo_id' => $photo_url,
                'location' => $this->input->post('location'),
            );

            //insert tour table
            $tourId = $this->tour_model->insert_tours($databaseData);

            $databaseData2 = array(
                'tour_id' => $tourId,
                'introduction' => $this->input->post('introduction'),
                'lat' => $this->input->post('lat'),
                'lng' => $this->input->post('lng')
            );

            //insert tour_item table
            $tourItemId = $this->tour_model->insert_tour($databaseData2);



            $dataflash = array(
                'success' => 'Successfully Uploaded'
            );

            $this->session->set_flashdata($dataflash);
            $data['site_view'] = 'addTours';
            $this->load->view('admin/dashboard', $data);

            } else {
                $data['site_view'] = 'addTours';
                $this->load->view('admin/dashboard', $data);
            }
        }
    }

    //function for uploading images
    public function imageUpload(){

        $config['upload_path']          = './assets/images/tours/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 200000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

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
        $data['suggessions'] = $this->tour_model->get_tourSuggessions($pageid);
        $data['site_view'] = 'TourItem';
        $this->load->view('main/main_view', $data);
    }


}

?>