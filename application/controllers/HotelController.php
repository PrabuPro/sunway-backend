<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelController extends CI_Controller{

    public function accomadations(){
        $data['results'] =  $this->hotel_model->get_hotels();
        $data['site_view'] = 'Accomadations';
        $data['site_title'] = 'Accomadations';
        $this->load->view('main/main_view', $data);
    }
    
    public function addHotelsView(){
        $data['site_view'] = 'AddHotels';
        $data['site_title'] = 'Add Hotels';
        $this->load->view('admin/dashboard', $data);
    }

     public function addHotels(){

        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('hotel_type', 'Hotel_type', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('suitable_for', 'Suitable_for', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|integer|max_length[15]');
        $this->form_validation->set_rules('location', 'Location', 'trim|required|max_length[15]');

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
            );

            //insert tour table
            $tourId = $this->hotel_model->insert_hotels($databaseData);


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

}

?>