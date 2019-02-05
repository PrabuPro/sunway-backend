<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSunway extends CI_Controller{

    public function admin(){
         $data['site_view'] = 'login';
         $this->load->view('admin/admin', $data);
    }

    public function login(){
        $this->form_validation->set_rules('username','Username','trim|required|max_length[15]');
        $this->form_validation->set_rules('password','Password','trim|required|max_length[15]');
    
        if($this->form_validation->run() == FALSE){
            $data = array(
                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);
            redirect('pro-login');
            
        }
        else{
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->admin_model->user_login($username, $password);

            if($this->session->userdata('logged_in')){
                $data['site_view'] = 'addTours';
                $this->load->view('admin/dashboard', $data);
            } else {
                $data = array(
                    'errors' => 'Username or Password Incorrect'
                );
                $this->session->set_flashdata($data);
                redirect('pro-login');
            }
            
        }
    
    }

    public function register_view(){
        $data['site_view'] = 'register';
        $this->load->view('admin/admin',$data);
    }

    public function register(){

        $this->form_validation->set_rules('username','Username','trim|required|max_length[15]');
        $this->form_validation->set_rules('password','Password','trim|required|max_length[15]');
        $this->form_validation->set_rules('confirm_password','Confirm password','trim|required|max_length[8]|matches[password]');
    
        if($this->form_validation->run() == FALSE){
            $data = array(
                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);
            redirect('pro-reg');
            
        } else {

            $options = [
                'cost' => 12,
            ];

            $hash = password_hash($this->input->post('password'),PASSWORD_BCRYPT, $options);
            
            $username = $this->input->post('username');
            $password = $hash;

            $this->admin_model->register_user($username, $password);

            $data = array(
                'success' => 'Registration Successful'
            );
            
            $this->session->set_flashdata($data);
            redirect('pro-login');
        }

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }



}


?>