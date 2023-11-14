<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Auth';
$route['404_override'] = 'Welcome';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'Auth/about';
$route['myreport'] = 'MyReport/index';
//login process
$route['actLogin'] = 'Auth/actLogin';
$route['logout'] = 'Auth/logout';
//Super Admin / Vice President routes
$route['dashboard'] = 'Admin/index'; //untuk dashboard nya
$route['cluster_umum'] = 'Admin/formUmum'; //untuk routing ke form perhitungan cluster umum
$route['prosesUmum'] = 'Admin/saveUmum'; // routing proses form umum ke db
$route['proyeksi'] = 'Admin/calculateRisk'; // routing proses kalulasi tanpa reload

$route['asessment_eval'] = 'Admin/asessmentEval';
$route['edit_asessment/(:num)'] = 'Admin/editAsessment/$1';
$route['delete_assesment/(:num)'] = 'Admin/deleteAsessment/$1';

$route['user_control'] = 'Admin/userControl';
$route['save_user'] = 'Admin/add_user';
$route['edit-user/(:num)'] = 'Admin/edit_user/$1';
$route['delete_user/(:num)'] = 'Admin/delete_user/$1';

$route['params_umum'] = 'Admin/paramsUmum';
$route['save_category'] = 'Admin/add_category';
$route['edit_category/(:num)'] = 'Admin/edit_category/$1';
$route['delete_category/(:num)'] = 'Admin/delete_category/$1';
$route['save_dimensi'] = 'Admin/add_dimensi';
$route['edit-dimensi/(:num)'] = 'Admin/edit_dimensi/$1';
$route['delete_dimensi/(:num)'] = 'Admin/delete_dimensi/$1';
$route['save_subDimensi'] = 'Admin/add_subDimensi';
$route['edit_subDimensi/(:num)'] = 'Admin/edit_subDimensi/$1';
$route['delete_subDimensi/(:num)'] = 'Admin/delete_subDimensi/$1';
$route['save_parameter'] = 'Admin/add_parameter';
$route['edit_parameter/(:num)'] = 'Admin/edit_parameter/$1';
$route['delete_parameter/(:num)'] = 'Admin/delete_parameter/$1';
$route['save_phase'] = 'Admin/add_phase';
$route['edit_phase/(:num)'] = 'Admin/edit_phase/$1';
$route['delete_phase/(:num)'] = 'Admin/delete_phase/$1';
$route['save_question'] = 'Admin/add_question';
$route['edit_question/(:num)'] = 'Admin/edit_question/$1';
$route['delete_question/(:num)'] = 'Admin/delete_question/$1';


//Approval/Manager routes
$route['dashboard_approval'] = 'Approval/index'; //untuk dashboard nya
$route['cluster_umum_'] = 'Approval/formUmum'; //untuk routing ke form perhitungan cluster umum
$route['proses_umum_'] = 'Approval/saveUmum'; //untuk routing ke form perhitungan cluster umum
$route['proyeksi_'] = 'Approval/calculateRisk'; //untuk routing ke form perhitungan cluster umum

$route['asessment_eval_'] = 'Approval/asessmentEval'; // routing proses form umum ke db
$route['edit_asessment_/(:num)'] = 'Approval/editAsessment/$1';
$route['delete_assesment_/(:num)'] = 'Approval/deleteAsessment/$1';


//Admin/Officer/User routes
$route['dashboard_officer'] = 'User/index'; //untuk dashboard nya
$route['cluster_umum__'] = 'User/formUmum'; //untuk routing ke form perhitungan cluster umum
$route['proses_umum__'] = 'User/saveUmum'; //untuk routing ke form perhitungan cluster umum
$route['proyeksi__'] = 'User/calculateRisk'; //untuk routing ke form perhitungan cluster umum
$route['asessment_eval__'] = 'User/asessmentEval'; // routing proses form umum ke db
