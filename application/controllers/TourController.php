<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class TourController extends CI_Controller{
    public function tours(){
        $data['site_view'] = 'Tours';
        $data['site_title'] = 'Tours';
        $this->load->view('main/main_view', $data);
    }
}

?>