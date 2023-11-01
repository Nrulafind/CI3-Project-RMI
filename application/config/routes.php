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


//login process
$route['actLogin'] = 'Auth/actLogin';
$route['logout'] = 'Auth/logout';

//Super Admin routes
$route['dashboard'] = 'Admin/index'; //untuk dashboard nya
$route['cluster_umum'] = 'Admin/formUmum'; //untuk routing ke form perhitungan cluster umum
// $route['cluster_asuransi'] = 'Admin/formAsuransi';
// $route['cluster_bank'] = 'Admin/formBank';
$route['prosesUmum'] = 'Admin/saveUmum'; // routing proses form umum ke db
// $route['prosesAsuransi'] = 'Admin/saveAsuransi';
// $route['prosesBank'] = 'Admin/saveBank';
$route['proyeksi'] = 'Admin/calculateRisk'; // routing proses kalulasi tanpa reload
$route['approval'] = 'Admin/approval';
$route['evidence_umum'] = 'Admin/evidenceUmum';
// $route['evidence_asuransi'] = 'Admin/evidenceAsuransi';
// $route['evidence_bank'] = 'Admin/evidenceBank';
$route['user_control'] = 'Admin/userControl';
// $route[''] = '';
$route['params_umum'] = 'Admin/paramsUmum';
// $route['params_asuransi'] = 'Admin/paramsAsuransi';
// $route['params_bank'] = 'Admin/paramsBank';


//Approval routes
$route['dashboard_approval'] = 'Approval/index'; //untuk dashboard nya
//$route['approval_'] = 'Approval/approval'; //untuk routing ke form perhitungan cluster umum
//$route['evidence_umum_'] = 'Approval/evidence'; // routing proses form umum ke db
$route['approval_'] = 'Approval/approval';
$route['evidence_umumApproval'] = 'Approval/evidence';
$route[''] = '';


//Admin routes
$route['dashboard_admin'] = 'User/index'; //untuk dashboard nya
// $route['umum_'] = 'User/formUmum'; //untuk routing ke form perhitungan cluster umum
// $route['prosesUmum'] = 'Admin/saveUmum'; // routing proses form umum ke db
// $route['proyeksi'] = 'Admin/calculateRisk';// routing proses kalulasi tanpa reload
$route['evidence_umumAdmin'] = 'User/evidence';
$route['cluster_umum_'] = 'User/formUmum';
$route[''] = '';
$route[''] = '';
$route[''] = '';
