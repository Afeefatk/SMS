<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

|	http://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There area two reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router what URI segments to use if those provided

| in the URL cannot be matched to a valid route.

|

*/



$route['default_controller'] = "welcome";  
//$route['member_detail/(:any)'] = 'driving_management/drivingmanagement/loadpages/member_detail/$1';

////---Admin---////

$route['useradmin'] = "useradmin";

////---Admin---////
////---UserAdmin---////



$route['useradmin/addstudent'] = "useradmin/loadpages/addstudent";
$route['useradmin/studentlist'] = "useradmin/loadpages/studentlist";
$route['useradmin/studentsearch'] = "useradmin/loadpages/studentsearch";
////---UserAdmin---////

///---Website---////





//$route['profile'] = "driving_management/drivingmanagement/loadpages/profile";
$route['404_override'] = '';

//$route['1'] = 'website/template1';
//$route['1/(:num)'] = 'website/template_1/$1';




///---Website---////

 //Subdomain routing
//  $shop_str = $_SERVER['HTTP_HOST'];
// //check the entered url is a subdomain and routes accordingly
// if(preg_match('/([a-zA-Z0-9\-_]+\.)?[a-zA-Z0-9\-_]+\.[a-zA-Z]{2,5}/',$shop_str) && 
//       ($shop_str != "richshimlas.xyz" && $shop_str != "www.richshimlas.xyz")){
      
//      $route['default_controller'] = "website/index/$shop_str";
//   // $route['default_controller1'] = "premium/index/$shop_str";
// }





/* End of file routes.php */

/* Location: ./application/config/routes.php */