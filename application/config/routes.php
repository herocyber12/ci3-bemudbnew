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
| controller and method names that contain dashes. '-'isn't a valid
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

$route['/pages/home'] = 'home';
$route['home/(:num)/(:any)'] = 'home/view/$1';

$route['absensi'] = 'absensi/p_absensi';
$route['absensi/(:num)/(:any)'] = 'absensi/view/$1';

$route['laporan'] = 'laporan/p_laporan';
$route['laporan/(:num)/(:any)'] = 'laporan/view/$1';

$route['proker'] = 'proker/p_proker';
$route['proker/(:num)/(:any)'] = 'proker/view/$1';

$route['surat'] = 'surat/p_surat';
$route['surat/(:num)/(:any)'] = 'surat/view/$1';

$route['artikel'] = 'artikel/p_artikel';
$route['artikel/(:num)/(:any)'] = 'artikel/view/$1';

$route['registrasi'] = 'registrasi/index';
$route['registrasi/(:num)/(:any)'] = 'registrasi/view/$1';

$route['oprec'] = 'oprec/index';
$route['oprec/(:num)/(:any)'] = 'oprec/view/$1';

$route['profil'] = 'profil/index';
$route['setting/profil/(:num)/(:any)'] = 'profil/view/$1';