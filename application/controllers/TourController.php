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

        else {

            $uploadedStatus =  $this->imageUpload();

            if($uploadedStatus){

            $databaseData = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'tour_type' => $this->input->post('tour_type'),
                'suitable_for' => $this->input->post('suitable_for'),
                'price' => $this->input->post('price'),
                'photo_id' => $_FILES['photo_id']['name'],
                'location' => $this->input->post('location'),
            );

            $result = $this->tour_model->insert_tour($databaseData);

            $data = array(
                'success' => 'Uploaded successfully'
            );

            $this->session->set_flashdata($data);
            redirect('add-tours');

            } else {
                redirect('add-tours');
            }
        }
    }


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
            $this->load->view('addtours');
            return FALSE;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('success', $data);
            return TRUE;
        }
    }
}

?>