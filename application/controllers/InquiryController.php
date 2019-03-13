<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class InquiryController extends CI_Controller{

    public function inquire(){

        $this->form_validation->set_rules('experience[]','Number (1) - experience','trim|required|max_length[150]');
        $this->form_validation->set_rules('pace','Number (2) - pace','trim|max_length[50]');
        // $this->form_validation->set_rules('people[]','Number (3) - people','trim|max_length[10]');
        // $this->form_validation->set_rules('adult','Number (3) - people > adult','trim|max_length[15]');
        // $this->form_validation->set_rules('children','Number (3) - people > children','trim|max_length[15]');
        // $this->form_validation->set_rules('accomadation','Number (4) - accomadation','trim|max_length[20]');
        // $this->form_validation->set_rules('accomadation_remarks','Number (4) - accomadation remark','trim|max_length[200]');
        // $this->form_validation->set_rules('start_date','Number (5) - Start Date','trim|required|max_length[20]');
        // $this->form_validation->set_rules('tour_status','Number (5) - Tour Status','trim|required|max_length[20]');
        // $this->form_validation->set_rules('duration','Number (6) - Duration','trim|required|numeric|max_length[5]');
        // $this->form_validation->set_rules('maldives','Number (7) - Maldives','trim|max_length[2]');
        // $this->form_validation->set_rules('nights','Number (7) - Maldives > nights','trim|max_length[5]');
        // $this->form_validation->set_rules('hotel','Number (7) - hotels','trim|max_length[10]');
        // $this->form_validation->set_rules('budget','Number (8) - budget','trim|max_length[10]');
        // $this->form_validation->set_rules('messages','Number (9) - budget','trim|max_length[20]');
        // $this->form_validation->set_rules('first_name','First Name','trim|required|max_length[50]');
        // $this->form_validation->set_rules('last_name','Last Name','trim|required|max_length[50]');
        // $this->form_validation->set_rules('age_range','Age Range','trim|required|max_length[20]');
        // $this->form_validation->set_rules('phone','Contact Number','trim|required|max_length[15]');
        // $this->form_validation->set_rules('email','email','trim|required|valid_email|max_length[50]');
        // $this->form_validation->set_rules('updates','Mounthly travel updates','trim|max_length[5]');

        // $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        // $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');


        if($this->form_validation->run() == FALSE) {
        
            echo validation_errors();
        
        } else {

            $start_date = DateTime::createFromFormat('m/d/Y', $this->input->post('start_date'));
            
            

            // if($this->input->post('tour_id') == NULL){
            //     $tour_type = implode(",",$this->input->post('tour_type')); ;
            // } else{
            //     $tour_type = htmlspecialchars($this->input->post('tour_type-item'));
            // }

             
            $experience = implode(',',$this->input->post('experience'));
            // $pace = implode(',',$this->input->post('pace'));
            // $people = implode(',',$this->input->post('people'));
            // $pace = htmlspecialchars(implode(',',$this->input->post('pace')));
               
            $databaseData = array (
                'experience' => $experience,
                'pace' => $this->input->post('pace'),
                // 'people_type' => $this->input->post('people')
                // 'adults' => htmlspecialchars($this->input->post('adult')),
                // 'children' => htmlspecialchars($this->input->post('children')),
                // 'accomadation_type' => htmlspecialchars($this->input->post('accomadation')),
                // 'accomadation_remarks' => htmlspecialchars($this->input->post('accomadation_remarks')),
                // 'start_date' => $start_date->format('Y-m-d'),
                // 'travel_status' => htmlspecialchars($this->input->post('tour_status')),
                // 'duration' => htmlspecialchars($this->input->post('duration')),
                // 'maldives_status' => htmlspecialchars($this->input->post('maldives')),
                // 'maldives_night' => htmlspecialchars($this->input->post('nights')),
                // 'maldives_hotel_type' => htmlspecialchars($this->input->post('hotel')),
                // 'budget' => htmlspecialchars($this->input->post('budget')),
                // 'message' => htmlspecialchars($this->input->post('message')),
                // 'first_name' => htmlspecialchars($this->input->post('first_name')),
                // 'last_name' => htmlspecialchars($this->input->post('last_name')),
                // 'age_range' => htmlspecialchars($this->input->post('age_range')),
                // 'telephone_number' => htmlspecialchars($this->input->post('phone')),
                // 'email' => htmlspecialchars($this->input->post('email')),
                // 'updates' => htmlspecialchars($this->input->post('update')),

            );
            echo 'array';

            $result = $this->inquiry_model->insert_inquiry($databaseData);

            if($reault = false) {
                $message = "Data insertion faild";
            } else {
                // $this->sendMail($databaseData,$result);
                $message = "Successfull";
            }

            echo $message;

        }

    }

    // function validate_captcha() {
    //     $captcha = $this->input->post('g-recaptcha-response');
    //      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le8HJEUAAAAAPqllBEAB4yjl9EZQnMy2SEVW25a&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
    //     if ($response . 'success' == false) {
    //         return FALSE;
    //     } else {
    //         return TRUE;
    //     }
    // }

    public function sendMail($data,$result) {
        $this->load->helper('email_helper');

        $emailAddress = 'it@sunwayholidays.lk';
        $name = 'Prabuddha';
        $subject = 'Sunway Holidays Inquiry';
        $content = '<h1>Inquiry Number - SH0'. $result . '</h1>';
        $content .= '<h3>This mail is generated with the information of the inquiry iteslf</h3><br>';
        $content .= '<p>Experience - '.$data['experience'] . '</p>';
        $content .= '<p>Pace - '.$data['pace'] . '</p>';
        $content .= '<p>people - '.$data['people_type'] . '</p>';
        $content .= '<p>adults - '.$data['adults'] . '</p>';
        $content .= '<p>Children - '.$data['children'] . '</p>';
        $content .= '<p>Accomadation Type - '.$data['accomadation_type'] . '</p>';
        $content .= '<p>accomadation_remarkse - '.$data['accomadation_remarks'] . '</p>';
        $content .= '<p>start_date - '.$data['start_date'] . '</p>';
        $content .= '<p>travel_status - '.$data['travel_status'] . '</p>';
        $content .= '<p>maldives_status - '.$data['maldives_status'] . '</p>';
        $content .= '<p>maldives_night - '.$data['maldives_night'] . '</p>';
        $content .= '<p>maldives_hotel_type - '.$data['maldives_hotel_type'] . '</p>';
        $content .= '<p>budget - '.$data['budget'] . '</p>';
        $content .= '<p>message - '.$data['message'] . '</p>';
        $content .= '<p>first_name - '.$data['first_name'] . '</p>';
        $content .= '<p>last_name - '.$data['last_name'] . '</p>';
        $content .= '<p>age_range - '.$data['age_range'] . '</p>';
        $content .= '<p>telephone_number - '.$data['telephone_number'] . '</p>';
        $content .= '<p>email - '.$data['email'] . '</p>';
        $content .= '<p>updates - '.$data['updates'] . '</p>';


        sendEmail($emailAddress,$name,$subject,$content);

    }


}





?>