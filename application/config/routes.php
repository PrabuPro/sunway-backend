<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'pagecontroller/index';
$route['404_override'] = 'pagecontroller/notFound';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'pagecontroller/index';
$route['tourslist'] = 'tourcontroller/tours';
$route['tour'] = 'tourcontroller/tourPage';
$route['accomadations'] = 'hotelcontroller/accomadations';
$route['experts-in'] = 'pagecontroller/experts_in';
$route['about-us'] = 'pagecontroller/aboutUs';
$route['maldives'] = 'pagecontroller/maldives';
$route['holidays'] = 'pagecontroller/holidays';
$route['contacts'] = 'pagecontroller/contacts';
$route['inquiry'] = 'pagecontroller/inquiry';
$route['tailormade'] = 'pagecontroller/tailormade';
$route['travel-policy'] = 'pagecontroller/policy';
$route['sustainale-responsible'] = 'pagecontroller/sustainable';
$route['step'] = 'pagecontroller/step';
$route['pro-login'] = 'adminsunway/admin';
$route['pro-reg'] = 'adminsunway/register_view';
$route['add-tours'] = 'tourcontroller/addtoursview';
$route['search-tours'] = 'tourcontroller/getSearch';
$route['search-tours/(:any)'] = 'tourcontroller/getHomeSearch/$1';
$route['search-for/(:any)'] = 'tourcontroller/getHomeSearchFor/$1';
$route['logout'] = 'adminsunway/logout';
$route['addtours'] = 'tourcontroller/addtours';
$route['addtoursview'] = 'tourcontroller/addtoursview';
$route['tours/(:num)'] = 'tourcontroller/touritem/$1';
$route['tours-list'] = 'tourcontroller/tours';
$route['tours-list/(:num)'] = 'tourcontroller/tours/$1';
$route['update-tours'] = 'tourcontroller/updateToursView';
$route['update-item/(:num)'] = 'tourcontroller/updateToursItemView/$1';
$route['accomadations'] = 'hotelcontroller/accomadations';
$route['accomadations-list/(:num)'] = 'hotelcontroller/accomadations/$1';
$route['accomadations/(:num)'] = 'hotelcontroller/hotelitem/$1';
$route['search-accomadation/(:any)'] = 'hotelcontroller/getHomeSearch/$1';
$route['search-accomadations-country/(:any)'] = 'hotelcontroller/getHomeSearchCountry/$1';
$route['addhotelsview'] = 'hotelcontroller/addhotelsview';
$route['addhotels'] = 'hotelcontroller/addhotels';
$route['search-accomadations'] = 'hotelcontroller/getSearch';
$route['tailormade/inquirycontroller/inquire'] = 'inquirycontroller/inquire';
$route['tours/inquirycontroller/inquire'] = 'inquirycontroller/inquire';
$route['inquirycontroller/inquire'] = 'inquirycontroller/inquire';
$route['blog'] = 'blogcontroller/blog';
$route['blog/title1'] = 'blogcontroller/title1';
$route['reviews'] = 'pagecontroller/review';
$route['login'] = 'adminsunway/login';
$route['payments'] = 'paymentController/index';
$route['news'] = 'pageController/news';
$route['add-news'] = 'pageController/news';
$route['payments/checkout'] = 'paymentController/payment';
$route['payments/receipt'] = 'paymentController/receipt';
$route['payments/tour-details'] = 'paymentController/tour_details';
$route['comming'] = 'pageController/comming';
$route['tour/acuto'] = 'pageController/comming';
$route['tours/get'] = 'tourController/getTourHotels';
$route['filterTour'] = 'REST_API/initialTours';
$route['filterTourPost'] = 'REST_API/filterTours';
$route['addTourCategories'] = 'tourController/addTourCategoryView';
$route['filter-tours'] = 'tourController/filterTours';
$route['addCategories'] = 'REST_API/addCategoris';


