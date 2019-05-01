<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentController extends CI_Controller{

    public function payment(){
        $this->load->view('payments');
    }

    public function receipt(){
        $this->load->view('receipt');
    }

    public function tour_details(){
        $this->load->view('payment-details');
    }
    
}