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
        $this->form_validation->set_rules('price', 'Price', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('location', 'Location', 'trim|required|max_length[15]');

        if($this->form_validation->run() == FALSE){
            $data = array(
                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);
            redirect('add-tours');

        }
    }
}

?>