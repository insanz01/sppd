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
$route['default_controller'] = 'AppController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['visitor'] = 'VisitorController/guest';
$route['visitor/do_submit'] = 'VisitorController/guest_record';
$route['visitor/member'] = 'VisitorController/member';
$route['visitor/member/do_submit'] = 'VisitorController/member_record';

$route['log/pinjam'] = 'LogController/log_keluar';
$route['log/pinjam/add'] = 'LogController/add_log_keluar';

$route['log/kembali'] = 'LogController/log_masuk';
$route['log/kembali/add'] = 'LogController/add_log_masuk';

$route['membership'] = 'MembershipController/index';
$route['membership/add'] = 'MembershipController/add_membership';
$route['membership/do_add'] = 'MembershipController/do_add_membership';
$route['membership/edit/(:any)'] = 'MembershipController/edit_membership/$1';
$route['membership/do_edit'] = 'MembershipController/do_update_membership';

$route['buku'] = 'BookController/index';
$route['buku/add'] = 'BookController/add_book';
$route['buku/do_add'] = 'BookController/do_add_book';
$route['buku/edit/(:any)'] = 'BookController/edit_book/$1';
$route['buku/do_edit'] = 'BookController/do_update_book';
