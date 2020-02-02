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

$route['car-published/(.+)'] = 'car/car_published/$1';
$route['car-unpublished/(.+)'] = 'car/car_unpublished/$1';
$route['car-delete/(.+)'] = 'car/car_delete/$1';
$route['car-edit/(.+)'] = 'car/car_edit/$1';
$route['update-car/'] = 'car/update_car';

$route['car-lisitng'] = 'welcome/car_listing';

$route['add-car'] = 'car/add_car';
$route['manage-car'] = 'car/manage_car';


$route['edit-location/(.+)'] = 'car/edit_location/$1'; 
$route['change-location-status/(.+)/(.+)'] = 'Car/change_location_status/$1/$2';
$route['all-location'] = 'Car/show_all_location';
$route['add-location'] = 'Car/show_add_location_form';

$route['edit-fuel/(.+)'] = 'car/edit_fuel/$1'; 
$route['change-fuel-status/(.+)/(.+)'] = 'Car/change_fuel_status/$1/$2';
$route['all-fuel'] = 'Car/show_all_fuel';
$route['add-fuel'] = 'Car/show_add_fuel_form';

$route['edit-brand/(.+)'] = 'car/edit_brand/$1'; 
$route['change-brand-status/(.+)/(.+)'] = 'Car/change_brand_status/$1/$2';
$route['all-brand'] = 'Car/show_all_brand';
$route['add-brand'] = 'Car/show_add_brand_form';

$route['register-admin'] = 'admin/show_admin_register_form';
$route['admin-logout'] = 'admin_login/check_admin_logout';
$route['admin-dashboard'] = 'admin/show_dashboard';
$route['admin-login'] = 'admin_login/check_admin_login';
$route['admin'] = 'admin_login';

$route['home-page'] = 'welcome';
$route['about-us'] = 'welcome/about_us';
$route['contact-us'] = 'welcome/contact_us';

$route['car-details/(.+)'] = 'welcome/car_details/$1'; 
$route['car-listing'] = 'welcome/car_listing';

$route['customer'] = 'customer/index';
$route['customer-registration'] = 'customer/customer_registration';
$route['customer-login'] = 'customer/check_customer_login';
$route['customer-logout'] = 'customer/check_customer_logout';
$route['booking'] = 'customer/booking';
$route['save-booking'] = 'customer/save_booking';

$route['invoice'] = 'invoice/manage_invoice';

$route['default_controller'] = 'welcome';
$route['abcd'] = 'admin/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


