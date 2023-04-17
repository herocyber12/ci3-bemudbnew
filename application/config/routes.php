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
$route['default_controller'] = 'landing';
$route['404_override'] = 'eror404';
$route['translate_uri_dashes'] = FALSE;

$route['landing/(:num)/(:any)'] = 'landing/login';

$route['pages/home'] = 'pages/home/index';
$route['pages/home/(:num)/(:any)'] = 'pages/home/view/$1';

$route['pages/absensi'] = 'pages/absensi/p_absensi';
$route['pages/absensi/(:num)/(:any)'] = 'pages/absensi/view/$1';

$route['pages/laporan'] = 'pages/laporan/p_laporan';
$route['pages/laporan/(:num)/(:any)'] = 'pages/laporan/view/$1';

$route['pages/proker'] = 'pages/proker/p_proker';
$route['pages/proker/(:num)/(:any)'] = 'pages/proker/view/$1';

$route['pages/surat'] = 'pages/surat/p_surat';
$route['pages/surat/(:num)/(:any)'] = 'pages/surat/view/$1';

$route['pages/artikel'] = 'pages/artikel/p_artikel';
$route['pages/artikel/(:num)/(:any)'] = 'pages/artikel/view/$1';

$route['pages/registrasi'] = 'pages/registrasi/index';
$route['pages/registrasi/(:num)/(:any)'] = 'pages/registrasi/view/$1';

$route['pages/oprec'] = 'pages/oprec/index';
$route['pages/oprec/(:num)/(:any)'] = 'pages/oprec/view/$1';