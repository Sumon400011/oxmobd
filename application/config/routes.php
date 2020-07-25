<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['Login'] = 'home/login';
$route['Signup'] = 'home/signup';


$route['About'] = 'home/about';
$route['Product'] = 'home/product';
$route['Contact'] = 'home/contact';
