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
        $data['site_view'] = 'how-it-works';
        $data['site_title'] = 'How It Works';
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
        $data['suggestions'] = $this->tour_model->suggestions(2);
        $this->load->view('main/main_view', $data);
    }

    public function step(){
        $data['site_view'] = 'step';
        $data['site_title'] = 'step';
        $this->load->view('main/main_view', $data);
    }
    public function sustainable(){
        $data['site_view'] = 'sustainable';
        $data['site_title'] = 'Sustainable Resposible';
        $this->load->view('main/main_view', $data);
    }
    public function inquiry(){
        $data['site_view'] = 'inquiry';
        $data['site_title'] = 'Inquiry';
        $data['suggestions'] = $this->tour_model->suggestions(2);
        $this->load->view('inquiry', $data);
    }
    public function policy(){
        $data['site_view'] = 'policy';
        $data['site_title'] = 'Travel Policy';
        $this->load->view('main/main_view', $data);
    }

    public function notFound(){
        $data['site_view'] = 'NotFound';
        $data['site_title'] = 'Sunway Holidays - Page Not Found';
        $this->load->view('main/main_view', $data);
    }

    public function review(){
        $data['site_view'] = 'review';
        $data['site_title'] = 'Sunway Holidays - Reviews';
        $this->load->view('main/main_view', $data);
    }

}

?>