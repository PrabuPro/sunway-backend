<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class InquiryController extends CI_Controller{

    public function inquire(){

        $this->form_validation->set_rules('experience[]','Number (1) - experience','trim|required|max_length[150]');
        $this->form_validation->set_rules('pace','Number (2) - pace','trim|max_length[50]');
        $this->form_validation->set_rules('people[]','Number (3) - people','trim|max_length[10]');
        $this->form_validation->set_rules('adults','Number (3) - people > adult','trim|max_length[15]');
        $this->form_validation->set_rules('children','Number (3) - people > children','trim|max_length[15]');
        $this->form_validation->set_rules('accomadation','Number (4) - accomadation','trim|max_length[20]');
        $this->form_validation->set_rules('accomadation_remarks','Number (4) - accomadation remark','trim|max_length[200]');
        $this->form_validation->set_rules('start_date','Number (5) - Start Date','trim|required|max_length[20]');
        $this->form_validation->set_rules('tour_status','Number (5) - Tour Status','trim|required|max_length[20]');
        $this->form_validation->set_rules('duration','Number (6) - Duration','trim|required|numeric|max_length[5]');
        $this->form_validation->set_rules('maldives','Number (7) - Maldives','trim|max_length[2]');
        $this->form_validation->set_rules('nights','Number (7) - Maldives > nights','trim|max_length[5]');
        $this->form_validation->set_rules('hotel','Number (7) - hotels','trim|max_length[10]');
        $this->form_validation->set_rules('budget','Number (8) - budget','trim|max_length[10]');
        $this->form_validation->set_rules('messages','Number (9) - budget','trim|max_length[20]');
        $this->form_validation->set_rules('first_name','First Name','trim|required|max_length[50]');
        $this->form_validation->set_rules('last_name','Last Name','trim|required|max_length[50]');
        $this->form_validation->set_rules('age_range','Age Range','trim|required|max_length[20]');
        $this->form_validation->set_rules('phone','Contact Number','trim|required|max_length[15]');
        $this->form_validation->set_rules('email','email','trim|required|valid_email|max_length[50]');
        $this->form_validation->set_rules('updates','Mounthly travel updates','trim|max_length[5]');

        // $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        // $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');


        if($this->form_validation->run() == FALSE) {
        
            echo validation_errors();
        
        } else {

            $start_date = DateTime::createFromFormat('d/m/Y', $this->input->post('start_date'));

             
            $experience = implode(',',$this->input->post('experience'));
   
               
            $databaseData = array (
                'experience' => $experience,
                'pace' => htmlspecialchars($this->input->post('pace')),
                'people_type' => htmlspecialchars($this->input->post('people')), 
                'adults' => htmlspecialchars($this->input->post('adults')),
                'children' => htmlspecialchars($this->input->post('children')),
                'accomadation_type' => htmlspecialchars($this->input->post('accomadation')),
                'accomadation_remarks' => htmlspecialchars($this->input->post('accomadation_remarks')),
                'start_date' => $start_date->format('Y-m-d'),
                'travel_status' => htmlspecialchars($this->input->post('tour_status')),
                'duration' => htmlspecialchars($this->input->post('duration')),
                'maldives_status' => htmlspecialchars($this->input->post('maldives')),
                'maldives_night' => htmlspecialchars($this->input->post('nights')),
                'maldives_hotel_type' => htmlspecialchars($this->input->post('hotel')),
                'budget' => htmlspecialchars($this->input->post('budget')),
                'message' => htmlspecialchars($this->input->post('message')),
                'first_name' => htmlspecialchars($this->input->post('first_name')),
                'last_name' => htmlspecialchars($this->input->post('last_name')),
                'age_range' => htmlspecialchars($this->input->post('age_range')),
                'telephone_number' => htmlspecialchars($this->input->post('phone')),
                'email' => htmlspecialchars($this->input->post('email')),
                'updates' => htmlspecialchars($this->input->post('updates')),

            );
            

            $result = $this->inquiry_model->insert_inquiry($databaseData);

            if($result == false) {
                $message = "Something went wrong! Please try again";
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

    public function tourInquire(){
        $this->form_validation->set_rules('name','Name','trim|required|max_length[15]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[50]');
        $this->form_validation->set_rules('phone','Phone Number','trim|required|max_length[14]');
        $this->form_validation->set_rules('country','Country','trim|required|max_length[30]');
        $this->form_validation->set_rules('num-of-adults','Number of Adults','trim|required|numeric|max_length[5]');
        $this->form_validation->set_rules('num-of-children','Number of Children','trim|required|numeric|max_length[5]');
        $this->form_validation->set_rules('check-in-date','Start Date','trim|required|max_length[10]');
        $this->form_validation->set_rules('number-of-days','Number of Days','trim|required|max_length[5]');
        $this->form_validation->set_rules('hotel_type','Hotel Type','trim|required|max_length[12]');
        $this->form_validation->set_rules('message','Message','trim|required|max_length[200]');
        $this->form_validation->set_rules('tour_id','Tour','trim|numeric|required|max_length[10]');
        $this->form_validation->set_rules('tour_type-item','Tour','trim|required|max_length[20]');
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');
 
        if($this->form_validation->run() == FALSE) {
        
            echo validation_errors();
        
        } 
 
        else {
            $in_date = DateTime::createFromFormat('m/d/Y', $this->input->post('check-in-date'));
            
            
            $databaseData = array (
                'tour_id' => htmlspecialchars($this->input->post('tour_id')),
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'phone' => htmlspecialchars($this->input->post('phone')),
                'country' => htmlspecialchars($this->input->post('country')),
                'adults' => htmlspecialchars($this->input->post('num-of-adults')),
                'children' => htmlspecialchars($this->input->post('num-of-children')),
                'start_date' => $in_date->format('Y-m-d'),
                'duration' => htmlspecialchars($this->input->post('number-of-days')),
                'hotel_type' => htmlspecialchars($this->input->post('hotel_type')),
                'message' => htmlspecialchars($this->input->post('message')),
                'tour_type' => htmlspecialchars($this->input->post('tour_type-item'))
        
            );

            $result = $this->inquiry_model->insert_tourInquiry($databaseData);

            if($result == false){
                $message = 'Data insertion faild';
            } else {
                $this->sendTourMail($databaseData,$result);
                $message = "Successfull";
            }

            echo $message;


        }

    }

    public function sendMail($data,$result) {
        $this->load->helper('email_helper');

        $emailAddress = 'it@sunwayholidays.lk';
        $name = 'Prabuddha';
        $subject = 'Sunway Holidays Inquiry';
        $content = '<h1>Inquiry Number - SH0TM'. $result . '</h1>';
        $content .= '<h3>This mail is generated with the information of the tailor made inquiry iteslf</h3><br>';
        $content .= '<p>Customer Name - '.$data['first_name'] . ' '.$data['last_name'].'</p>';
        $content .= '<p>Age range of customer - '.$data['age_range'] . '</p>';
        $content .= '<p>Telephone number - '.$data['telephone_number'] . '</p>';
        $content .= '<p>Email address - '.$data['email'] . '</p>';
        $content .= '<p>Experience looking for - '.$data['experience'] . '</p>';
        $content .= '<p>Pace looking for - '.$data['pace'] . '</p>';
        $content .= '<p>Type of people package - '.$data['people_type'] . '</p>';
        $content .= '<p>Number of adults - '.$data['adults'] . '</p>';
        $content .= '<p>Number of Children - '.$data['children'] . '</p>';
        $content .= '<p>Hotel Type - '.$data['accomadation_type'] . '</p>';
        $content .= '<p>Remarks for hotel - '.$data['accomadation_remarks'] . '</p>';
        $content .= '<p>Tour start date - '.$data['start_date'] . '</p>';
        $content .= '<p>Travel status - '.$data['travel_status'] . '</p>';
        $content .= '<p>Duration - '.$data['duration'] . '</p>';
        $content .= '<p>Maldives package - '.( ($data['maldives_status'] == 1) ? 'Yes' : 'No'). '</p>';
        $content .= '<p>Maldives nights - '.( ($data['maldives_status'] == 1) ? $data['maldives_night'] : 'No') . '</p>';
        $content .= '<p>Maldives hotel type - '.( ($data['maldives_status'] == 1) ? $data['maldives_hotel_type'] : 'No') . '</p>';
        $content .= '<p>Budget - '.$data['budget'] . '</p>';
        $content .= '<p>Message - '.$data['message'] . '</p>';
        $content .= '<p>Customer Want updates - '.( ($data['updates'] == 1) ? 'Yes' : 'No'). '</p>';


        sendEmail($emailAddress,$name,$subject,$content);

    }

    public function sendTourMail($data,$result) {
        $this->load->helper('email_helper');

        $emailAddress = 'it@sunwayholidays.lk';
        $name = 'Prabuddha';
        $subject = 'Sunway Holidays Inquiry';
        $content = '<h1>Tour Inquiry Number - SH0DT'. $result . '</h1>';
        $content .= '<h3>This mail is generated with the information of the iquiry iteslf</h3><br>';
        $content .= '<p>Name - '.$data['name'] . '</p>';
        $content .= '<p>Email - '.$data['email'] . '</p>';
        $content .= '<p>Contact Number - '.$data['phone'] . '</p>';
        $content .= '<p>Country - '.$data['country'] . '</p>';
        $content .= '<p>Tour Id - '.$data['tour_id'] . '</p>';
        $content .= '<p>Tour Type - '.$data['tour_type'] . '</p>';
        $content .= '<p>Hotel Type - '.$data['hotel_type'] . '</p>';
        $content .= '<p>Check In Date - '.$data['start_date'] . '</p>';
        $content .= '<p>Duration - '.$data['duration'] . '</p>';
        $content .= '<p>Adults - '.$data['adults'] . '</p>';
        $content .= '<p>Children - '.$data['children'] . '</p>';
        $content .= '<p>Message - '.$data['message'] . '</p>';

        sendEmail($emailAddress,$name,$subject,$content);
    }

}





?>