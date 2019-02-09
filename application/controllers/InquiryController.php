<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class InquiryController extends CI_Controller{

    public function inquire(){
       

        $this->form_validation->set_rules('name','Your Name','trim|required|max_length[30]');
        $this->form_validation->set_rules('email','Your Email','trim|required|valid_email|max_length[50]');
        $this->form_validation->set_rules('phone','Phone Number','trim|required|regex_match[/^[+0-9]{12}$/]|max_length[12]');
        $this->form_validation->set_rules('country','Your Country','trim|required|max_length[20]');
        $this->form_validation->set_rules('num-of-adults','Number of Adults','trim|required|numeric|max_length[2]');
        $this->form_validation->set_rules('num-of-children','Number of Children','trim|required|alpha_numeric|max_length[2]');
        $this->form_validation->set_rules('check-in-date','Approx Arival Date','trim|required|max_length[15]');
        $this->form_validation->set_rules('check-out-date','Depature Date','trim|required|max_length[15]');
        $this->form_validation->set_rules('hotel_type','Hotel Type','trim|required|alpha_numeric_spaces|max_length[15]');
        $this->form_validation->set_rules('tour_type','Tour Type','trim|required|alpha_numeric_spaces|max_length[15]');
        $this->form_validation->set_rules('tranportation_type','Tranportation Type','trim|required|alpha|max_length[10]');
        $this->form_validation->set_rules('message','Message','trim|required|max_length[200]');

        if($this->form_validation->run() == FALSE) {
        
            echo validation_errors();
        
        } else {

            $in_date = DateTime::createFromFormat('m/d/Y', $this->input->post('check-in-date'));
            $out_date = DateTime::createFromFormat('m/d/Y', $this->input->post('check-out-date'));


            $databaseData = array (
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'phone' => htmlspecialchars($this->input->post('phone')),
                'country' => htmlspecialchars($this->input->post('country')),
                'num_of_adults' => htmlspecialchars($this->input->post('num-of-adults')),
                'num_of_children' => htmlspecialchars($this->input->post('num-of-children')),
                'check_in_date' => $in_date->format('Y-m-d'),
                'check_out_date' => $out_date->format('Y-m-d'),
                'hotel_type' => htmlspecialchars($this->input->post('hotel_type')),
                'tour_type' => htmlspecialchars($this->input->post('tour_type')),
                'transportation_type' => htmlspecialchars($this->input->post('tranportation_type')),
                'message' => htmlspecialchars($this->input->post('message'))

            );

            $reault = $this->inquiry_model->insert_inquiry($databaseData);

            if($reault = false) {
                $message = "Data insertion faild";
            } else {
                $reault = $this->sendMail($databaseData);
                $message = "Successfull";
            }

            echo $message;

        }

    }

    public function sendMail($data) {
        $this->load->helper('email_helper');

        $emailAddress = 'it@sunwayholidays.lk';
        $name = 'name';
        $subject = 'test mail';
        $content = 'testing content';


        sendEmail($emailAddress,$name,$subject,$content);

    }


}





?>