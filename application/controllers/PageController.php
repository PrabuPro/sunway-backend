<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller{
    public function index(){
        $data['site_view'] = 'Home';
        $data['site_title'] = 'Home';
        $this->load->view('main/main_view', $data);
    }

    public function home(){
        $data['site_view'] = 'Home';
        $data['site_title'] = 'Home';
        $this->load->view('main/main_view', $data);
    }

}

?>