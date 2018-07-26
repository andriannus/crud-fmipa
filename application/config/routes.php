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
$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin/tanaman/area'] = 'plant/area';
$route['admin/tanaman/area/tambah'] = 'plant/areaAdd';
$route['admin/tanaman/area/(:any)/ubah'] = 'plant/areaEdit/$1';

$route['admin/tanaman/famili'] = 'plant/famili';
$route['admin/tanaman/famili/tambah'] = 'plant/familiAdd';
$route['admin/tanaman/famili/(:any)/ubah'] = 'plant/familiEdit/$1';

$route['admin/binatang/area'] = 'animal/area';
$route['admin/binatang/area/tambah'] = 'animal/areaAdd';
$route['admin/binatang/area/(:any)/ubah'] = 'animal/areaEdit/$1';

$route['admin/binatang/famili'] = 'animal/famili';
$route['admin/binatang/famili/tambah'] = 'animal/familiAdd';
$route['admin/binatang/famili/(:any)/ubah'] = 'animal/familiEdit/$1';
