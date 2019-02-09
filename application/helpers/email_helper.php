<?php 
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    
    function sendEmail($emailAddress, $name, $subject, $content) {
        require 'application/vendor/autoload.php'; 

        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("prabuddha.proart@gmail.com", "ADMIN WEB");
        $email->setSubject($subject);
        $email->addTo($emailAddress, $name);
        $email->addContent("text/plain", $content);
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            // print $response->statusCode() . "\n";
            // print_r($response->headers());
            // print $response->body() . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
    }

?>