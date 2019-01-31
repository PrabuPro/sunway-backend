<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelController extends CI_Controller{
    public function accomadations(){
        $data['site_view'] = 'Accomadations';
        $data['site_title'] = 'Accomadations';
        $this->load->view('main/main_view', $data);
    }
    

}

?>