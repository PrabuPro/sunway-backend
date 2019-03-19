<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MailController extends CI_Controller{

    public function mail(){
        $this->form_validation->set_rules('name','Name','trim|required|max_length[20]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[50]');
        $this->form_validation->set_rules('subject','Subject','trim|required|max_length[20]');
        $this->form_validation->set_rules('message','Message','trim|required|max_length[200]');
        $this->form_validation->set_rules('g-recaptcha-response','Captcha','callback_recaptcha');

        if($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
            
            $data = array(
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'subject' => htmlspecialchars($this->input->post('subject')),
                'message' => htmlspecialchars($this->input->post('message'))
            );

            $id = $this->mail_model->mail($data);

            if($id > 0){
                $this->sendMail($data, $id);
                echo "Successfull";
            } else {
                echo "Data insertion faild";
            }
        }
    }
    public function tourMail(){
        $this->form_validation->set_rules('name','Name','trim|required|max_length[20]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[50]');
        $this->form_validation->set_rules('message','Message','trim|required|max_length[200]');

        if($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {

            $subject = 'Tour - Ask Question';
            
            $data = array(
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'subject' => $subject,
                'message' => htmlspecialchars($this->input->post('message')),
                'tour_id' => htmlspecialchars($this->input->post('tour_id'))
            );

            $id = $this->mail_model->mail($data);

            if($id > 0){
                $this->sendMail($data, $id);
                echo "Successfull";
            } else {
                echo "Data insertion faild";
            }
        }
    }

    public function recaptcha($str='') {
        $google_url="https://www.google.com/recaptcha/api/siteverify";
        $secret='6Le8HJEUAAAAAPqllBEAB4yjl9EZQnMy2SEVW25a';
        $ip=$_SERVER['REMOTE_ADDR'];
        $url=$google_url."?secret=".$secret."&response=".$str."&remoteip=".$ip;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        $res = curl_exec($curl);
        curl_close($curl);
        $res= json_decode($res, true);
        //reCaptcha success check
        if($res['success'])
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('recaptcha', 'The reCAPTCHA field is telling me that you are a robot. Shall we give it another try?');
            return FALSE;
        }
    }


    public function sendMail($data,$id) {
        $this->load->helper('email_helper');

        $emailAddress = 'it@sunwayholidays.lk';
        $name = 'Prabuddha';
        $subject = 'Sunway Holidays Message';
        $content = '<h1>Message Number - SHMG'. $id . '</h1>';
        $content .= (isset($data['tour_id'])) ? ('<h3>Direct Tour Questions</h3><br>') : ('<h3>Mail from customer</h3><br>');
        $content .= '<p>Name - '.$data['name'] . '</p>';
        $content .= '<p>Email - '.$data['email'] . '</p>';
        $content .= '<p>Mail subject - '.$data['subject'] . '</p>';
        $content .= '<p>Content - '.$data['message'] . '</p>';
        $content .= (isset($data['tour_id'])) ? ('<p>Tour Id - '.$data['tour_id'] . '</p>') : (' ');
      
        sendEmail($emailAddress,$name,$subject,$content);

    }



}



?>