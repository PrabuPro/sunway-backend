<?php 
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    
    function sendEmail($emailAddress, $name, $subject, $content) {
        require 'vendor/autoload.php'; 

        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("admin@swift.dev", "SWIFT ADMIN");
        $email->setSubject($subject);
        $email->addTo($emailAddress, $name);
        $email->addContent("text/plain", $content);
        $sendgrid = new \SendGrid(getenv('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'));
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