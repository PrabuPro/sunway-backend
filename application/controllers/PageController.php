<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller{
    public function index(){
        $data['site_view'] = 'Home';
        $data['site_title'] = 'Home';
        $data['recommended_hotels'] = $this->hotel_model->getRecommendedHotels(1);
        $this->load->view('main/main_view', $data);
    }
    public function home(){
        $data['site_view'] = 'Home';
        $data['site_title'] = 'Home';
        $this->load->view('main/main_view', $data);
    }
    public function experts_in(){
        $data['site_view'] = 'experts-in';
        $data['site_title'] = 'Experts In';
        $this->load->view('main/main_view', $data);
    }
    public function aboutUs(){
        $data['site_view'] = 'AboutUs';
        $data['site_title'] = 'About Us';
        $this->load->view('main/main_view', $data);
    }
    public function maldives(){
        $data['site_view'] = 'Maldives';
        $data['site_title'] = 'Maldives';
        $this->load->view('main/main_view', $data);
    }
    public function holidays(){
        $data['site_view'] = 'Holidays';
        $data['site_title'] = 'Holidays';
        $this->load->view('main/main_view', $data);
    }
    public function contacts(){
        $data['site_view'] = 'Contacts';
        $data['site_title'] = 'Contacts';
        $this->load->view('main/main_view', $data);
    }

    public function tailormade(){
        $data['site_view'] = 'Tailormade';
        $data['site_title'] = 'Tailormade';
        $this->load->view('main/main_view', $data);
    }

    public function step(){
        $data['site_view'] = 'step';
        $data['site_title'] = 'step';
        $this->load->view('main/main_view', $data);
    }

}

?>