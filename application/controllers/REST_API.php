<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	exit;
}

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class REST_API extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }


    public function tours_get(){
        
        $temp = $this->tour_model->get_toursFilter(8,1);

        foreach($temp as $row){
            $data[$row->tour_id] = array (
                'title' => $row->name,
                'description' => $row->introduction,
                'duration' => $row->duration,
                'image' => base_url().'assets/images/tours/'.$row->photo_id
            );
        }

        if (count($data) > 0) {
            $data['status'] = 'OK';
            $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $this->response(array('status' => 'NO_RECORDS'), REST_Controller::HTTP_OK);
        }
    }

    public function toursUpdate_get(){

        $searchVal = $this->uri->segment(2);

        $searchVal = urldecode($searchVal);

        $temp = $this->tour_model->tourSearch($searchVal);

        foreach($temp as $row){
            $data[$row->tour_id] = array (
                'title' => $row->name,
                'description' => $row->introduction,
                'duration' => $row->duration,
                'image' => base_url().'assets/images/tours/'.$row->photo_id
            );
        }

        if (count($data) > 0) {
            $data['status'] = 'OK';
            $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $this->response(array('status' => 'NO_RECORDS'), REST_Controller::HTTP_OK);
        }
    }

    // public function toursParams_get(){

    //     $value = $this->input->get('a');

    //     $data = array(
    //         'test' => $value
    //     );

    //     // foreach($temp as $row){
    //     //     $data[$row->tour_id] = array (
    //     //         'title' => $row->name,
    //     //         'description' => $row->introduction,
    //     //         'duration' => $row->duration,
    //     //         'image' => base_url().'assets/images/tours/'.$row->photo_id
    //     //     );
    //     // }

    //     if (count($data) > 0) {
    //         $data['status'] = 'OK';
    //         $this->response($data, REST_Controller::HTTP_OK);
    //     } else {
    //         $this->response(array('status' => 'NO_RECORDS'), REST_Controller::HTTP_OK);
    //     }        
    // }

    public function toursParams_post(){

        $postData = json_decode(file_get_contents("php://input"), TRUE);
        
        $postReqToServer = array(
             $postData['romanticHoliday'],
             $postData['couplesFriends']
        );

        $result = $this->tour_model->testPost($postReqToServer);

        $data = array(
            'this' => $result
        );

        // foreach($result as $row){
        //     $data[$row->tour_id] = array (
        //         'title' => $row->name,
        //     );
            
        // }

        if (count($data) > 0) {
            $data['status'] = 'OK';
            $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $this->response(array('status' => 'NO_RECORDS'), REST_Controller::HTTP_OK);
        }

        
    }

}
