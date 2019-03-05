<?php
class BlogController extends CI_Controller{
    
    public function blog(){
        $data['site_view'] = 'blog';
        $data['site_title'] = 'Blog';
        $this->load->view('main/main_view', $data);
    } 
    public function title1(){
        $data['site_view'] = 'blog1';
        $data['site_title'] = 'Title';
        $this->load->view('main/main_view', $data);
    } 

}