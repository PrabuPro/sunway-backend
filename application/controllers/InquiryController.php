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
        $this->form_validation->set_rules('number-of-days','Number of Days','trim|required|numeric|max_length[15]');
        $this->form_validation->set_rules('hotel_type','Hotel Type','trim|required|alpha_numeric_spaces|max_length[15]');
        $this->form_validation->set_rules('tour_type[]','Tour Type','trim|required|alpha_numeric_spaces|max_length[75]');
        $this->form_validation->set_rules('message','Message','trim|max_length[200]');
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');


        if($this->form_validation->run() == FALSE) {
        
            echo validation_errors();
        
        } else {

            $in_date = DateTime::createFromFormat('m/d/Y', $this->input->post('check-in-date'));
            $number_of_days = implode(",",$this->input->post('tour_type'));


            $databaseData = array (
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'phone' => htmlspecialchars($this->input->post('phone')),
                'country' => htmlspecialchars($this->input->post('country')),
                'num_of_adults' => htmlspecialchars($this->input->post('num-of-adults')),
                'num_of_children' => htmlspecialchars($this->input->post('num-of-children')),
                'check_in_date' => $in_date->format('Y-m-d'),
                'number_of_days' => htmlspecialchars($this->input->post('number-of-days')),
                'hotel_type' => htmlspecialchars($this->input->post('hotel_type')),
                'tour_type' => $number_of_days,
                'message' => htmlspecialchars($this->input->post('message'))

            );

            $result = $this->inquiry_model->insert_inquiry($databaseData);

            if($reault = false) {
                $message = "Data insertion faild";
            } else {
                $this->sendMail($databaseData,$result);
                $message = "Successfull";
            }

            echo $message;

        }

    }

    function validate_captcha() {
        $captcha = $this->input->post('g-recaptcha-response');
         $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le8HJEUAAAAAPqllBEAB4yjl9EZQnMy2SEVW25a&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        if ($response . 'success' == false) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function sendMail($data,$result) {
        $this->load->helper('email_helper');

        $emailAddress = 'it@sunwayholidays.lk';
        $name = 'Prabuddha';
        $subject = 'Sunway Holidays Inquiry';
        $content = '<h1>Inquiry Number - SH0'. $result . '</h1>';
        $content .= '<h3>This mail is generated with the information of the iquiry iteslf</h3><br>';
        $content .= '<p>Name - '.$data['name'] . '</p>';
        $content .= '<p>Email - '.$data['email'] . '</p>';
        $content .= '<p>Contact Number - '.$data['phone'] . '</p>';
        $content .= '<p>Country - '.$data['country'] . '</p>';
        $content .= '<p>Tour Type - '.$data['tour_type'] . '</p>';
        $content .= '<p>Hotel Type - '.$data['hotel_type'] . '</p>';
        $content .= '<p>Check In Date - '.$data['check_in_date'] . '</p>';
        $content .= '<p>Check Out Date - '.$data['number_of_days'] . '</p>';
        $content .= '<p>Number of Adults - '.$data['num_of_adults'] . '</p>';
        $content .= '<p>Number of Children - '.$data['num_of_children'] . '</p>';
        $content .= '<p>Costomer Message - '.$data['message'] . '</p>';


        sendEmail($emailAddress,$name,$subject,$content);

    }


}





?>