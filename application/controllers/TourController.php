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

        $name = $this->input->post('name');
    }
}

?>