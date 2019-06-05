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


    public function initialTours_get(){
        
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
            // $data['status'] = 'OK';
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
            // $data['status'] = 'OK';
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

    public function filterTours_post(){

        $postData = json_decode(file_get_contents("php://input"), TRUE);
        
        $postReqToServer = array(
            $postData['suitableFor'],
            $postData['interests'],
            $postData['experience'],
            $postData['beachStayIn'],
            $postData['activityLevel'],
            $postData['romanticHoliday'],
            $postData['couplesFriends'],
            $postData['travellingSolo'],
            $postData['familiesTeenages'],
            $postData['familiesKids'],
            $postData['seniors'],
            $postData['culture'],
            $postData['unescoHeritage'],
            $postData['interactWithAnimals'],
            $postData['wildlifeWatching'],
            $postData['natureAndLandscapes'],
            $postData['teaTrails'],
            $postData['relaxingBeachTime'],
            $postData['colomboCity'],
            $postData['ecoLovers'],
            $postData['localExperience'],
            $postData['meetLocals'],
            $postData['northernPeninsular'],
            $postData['notthEasternCoast'],
            $postData['westernCoast'],
            $postData['southWesternCoast'],
            $postData['southernCoast'],
            $postData['easternCoast'],
            $postData['softAdventure'],
            $postData['activeHoliday'],
            $postData['relaxingHoliday'],
            $postData['leisureDayInBetween'],
            $postData['midlyActiveHoliday'],
            $postData['seeAsMuchAsPossible'],
            $postData['relaxingBeachTime']
        );

        $result = $this->tour_model->testPost($postReqToServer);


        foreach($result as $row){
            $data[$row[0]->tour_id] = array (
                'tour_id' => $row[0]->tour_id,
                'title' => $row[0]->name,
                'description' => $row[0]->introduction,
                'duration' => $row[0]->duration,
                'image' => base_url().'assets/images/tours/'.$row[0]->photo_id
            );
        }

        // $data = array(
        //     'test' => $result
        // );

        if ( !empty($data)) {
            // $data['status'] = 'OK';
            $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $this->response(array('status' => 'NO_RECORDS'), REST_Controller::HTTP_OK);
        }

    }
    public function addCategoris_post(){

        $postData = json_decode(file_get_contents("php://input"), TRUE);
        
        $suitableFor = array(
            'tour_Id' => $postData['tourId'],
            'romanticHoliday' => $postData['romanticHoliday'],
            'couplesFriends' => $postData['couplesFriends'],
            'travellingSolo' => $postData['travellingSolo'],
            'familiesTeenages' => $postData['familiesTeenages'],
            'familiesKids' => $postData['familiesKids'],
            'seniors' => $postData['seniors']
        );

        $interest = array(
            'tour_Id' => $postData['tourId'],
            'culture' => $postData['culture'],
            'unescoHeritage' => $postData['unescoHeritage'],
            'interactWithAnimals' => $postData['interactWithAnimals'],
            'wildlifeWatching' => $postData['wildlifeWatching'],
            'natureAndLandscapes' => $postData['natureAndLandscapes'],
            'teaTrails' => $postData['teaTrails'],
            'relaxingBeachTime' => $postData['relaxingBeachTime'],
            'colomboCity' => $postData['colomboCity'],
            'ecoLovers' => $postData['ecoLovers']
        );

        $experience = array(
            'tour_Id' => $postData['tourId'],
            'localExperience' => $postData['localExperience'],
            'meetLocals' => $postData['meetLocals']
        );

        //  $beachStayIn = array(
        //     'tour_Id' => $postData['tourId'],
        //     'northernPeninsular' => $postData['northernPeninsular'],
        //     'notthEasternCoast' => $postData['notthEasternCoast'],
        //     'westernCoast' => $postData['westernCoast'],
        //     'southWesternCoast' => $postData['southWesternCoast'],
        //     'southernCoast' => $postData['southernCoast'],
        //     'easternCoast' => $postData['easternCoast']
        // );

        //  $activityLevel = array(
        //     'tour_Id' => $postData['tourId'],
        //     'softAdventure' => $postData['softAdventure'],
        //     'activeHoliday' => $postData['activeHoliday'],
        //     'relaxingHoliday' => $postData['relaxingHoliday'],
        //     'leisureDayInBetween' => $postData['leisureDayInBetween'],
        //     'midlyActiveHoliday' => $postData['midlyActiveHoliday'],
        //     'seeAsMuchAsPossible' => $postData['seeAsMuchAsPossible'],
        //     'relaxingBeachTime' => $postData['relaxingBeachTime']
        // );

        $suitableForResult = $this->tour_model->insertTourCategorySuitableFor($suitableFor);
        $interestResult = $this->tour_model->insertTourCategoryInterest($interest);
        $experienceResult = $this->tour_model->insertTourCategoryExperience($experience);
        // $beachStayInResult = $this->tour_model->insertTourCategoryBeachStayIn($beachStayIn);
        // $activityLevelResult = $this->tour_model->insertTourCategoryActivityLevel($activityLevel);

        // $data = array(
        //         'status' => $beachStayIn
        //     );

        if(!empty($suitableForResult) || !empty($interestResult) || !empty($experienceResult)){
            $data = array(
                'status' => 'OK'
            );
        } else {
            $data = array(
                'status' => 'ERROR'
            );

        }

        if ( !empty($data)) {
            // $data['status'] = 'OK';
            $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $this->response(array('status' => 'NO_RECORDS'), REST_Controller::HTTP_OK);
        }

    }

}
