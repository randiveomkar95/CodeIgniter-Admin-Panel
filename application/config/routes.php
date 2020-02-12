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

//Default Routing:
$route['default_controller'] = 'Website';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'master';

//route['addressbar_url'] = 'controller/function_name';

//Login Routing:
$route['login'] = 'login';
$route['process'] = 'login/process';
$route['logout'] = 'login/logout';

//Logo Routing:
$route['logo'] = 'logo';
$route['logo/post']['post'] = "logo/uploadImage";
$route['add_logo'] = 'logo/add_logo';
$route['edit_logo/(:any)'] = 'logo/edit_logo/$1';
$route['view_logo'] = 'logo/view_logo';

//Brochure Routing:
$route['brochure'] = 'brochure';
$route['brochure/post']['post'] = "brochure/uploadImage";
$route['add_brochure'] = 'brochure/add_brochure';
$route['edit_brochure/(:any)'] = 'brochure/edit_brochure/$1';
$route['view_brochure'] = 'brochure/view_brochure';

//Slider Routing:
$route['slider'] = 'slider';
$route['add_slider'] = 'slider/add_slider';
$route['edit_slider/(:any)'] = 'slider/edit_slider/$1';
$route['view_slider'] = 'slider/view_slider';

//About Routing:
$route['about'] = 'about';
$route['users'] = 'users';
$route['add_about'] = 'about/add_about';
$route['edit_about/(:any)'] = 'about/edit_about/$1';
$route['edit_about/master'] = 'master';
$route['view_about'] = 'about/view_about';

//Product 	Routing:
$route['product'] = 'Product';
$route['add_product'] = 'Product/add_product';
$route['edit_product/(:any)'] = 'Product/edit_product/$1';
$route['view_product_images/(:any)'] = 'Product/view_product_images/$1';
$route['view_product_images/edit_product_image/(:any)'] = 'Product/edit_product_image/$1';
$route['view_product'] = 'Product/view_product';
$route['view_single_product_images/(:any)'] = 'Product/view_product_images/$1';
$route['view_single_product_images/edit_product_image/(:any)'] = 'Product/edit_product_image/$1';

//Services Routing:
$route['services'] = 'services';
$route['add_services'] = 'services/add_services';
$route['edit_services/(:any)'] = 'services/edit_services/$1';
$route['view_services'] = 'services/view_services';

//Blogs Routing:
$route['blog'] = 'blog';
$route['add_blog'] = 'blog/add_blog';
$route['edit_blog/(:any)'] = 'blog/edit_blog/$1';
$route['view_blog'] = 'blog/view_blog';

//Testimonial Routing:
$route['testimonial'] = 'testimonial';
$route['add_testimonial'] = 'testimonial/add_testimonial';
$route['edit_testimonial/(:any)'] = 'testimonial/edit_testimonial/$1';
$route['view_testimonial'] = 'testimonial/view_testimonial';

//Gallary Routing:
$route['gallary'] = 'gallary';
$route['add_gallary'] = 'gallary/add_gallary';
$route['view_gallary'] = 'gallary/view_gallary';

//About Routing:
$route['footer'] = 'footer';
$route['add_footer'] = 'footer/add_footer';
$route['edit_footer/(:any)'] = 'footer/edit_footer/$1';
$route['view_footer'] = 'footer/view_footer';

//Header Routing:
$route['header'] = 'header';
$route['add_header'] = 'header/add_header';
$route['edit_header/(:any)'] = 'header/edit_header/$1';
$route['view_header'] = 'header/view_header';

//Slider Routing:
$route['client'] = 'client';
$route['add_client'] = 'client/add_client';
$route['edit_client/(:any)'] = 'client/edit_client/$1';
$route['view_client'] = 'client/view_client';

//Company Routing:
$route['company'] = 'company';
$route['add_company'] = 'company/add_company';
$route['edit_company/(:any)'] = 'company/edit_company/$1';
$route['view_company'] = 'company/view_company';

//Infrastructure Routing:
$route['infra'] = 'infra';
$route['add_infra'] = 'infra/add_infra';
$route['edit_infra/(:any)'] = 'infra/edit_infra/$1';
$route['view_infra'] = 'infra/view_infra';

//Enquiry Routing:
$route['enquiry'] = 'enquiry';
$route['vendor_enquiry'] = 'enquiry/vendor_enquiry';
$route['view_enquiry'] = 'enquiry/view_enquiry';
$route['view_vendor_enquiry'] = 'enquiry/vendor_enquiry';

//WEBSITE FRONTEND

$route['about_us']   = 'Website/about_us';
$route['service']    = 'Website/service';
$route['gallery1']    = 'website/gallery1';
$route['contact_us'] = 'Website/contact_us';
$route['products/(:any)'] = 'Website/products/$1';
$route['infrastructure'] = 'Website/infrastructure';
$route['clients'] = 'Website/clients';
$route['insert_enquiry'] = 'Website/insert_enquiry';
$route['insert_vendor_enquiry'] = 'Website/insert_vendor_enquiry';