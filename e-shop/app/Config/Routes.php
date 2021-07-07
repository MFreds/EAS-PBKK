<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Home::admin');
$routes->get('/product/(:num)', 'Home::product/$1');

$routes->get('/auth', 'Authorization::index');
$routes->post('/auth/register', 'Authorization::register');
$routes->post('/auth/login', 'Authorization::login');


$routes->get('/admin/products/', 'ItemsInventory::list_item');
$routes->get('/admin/products/add', 'ItemsInventory::new_item');
$routes->post('/admin/products/add', 'ItemsInventory::save');
$routes->get('/admin/products/edit/(:num)', 'ItemsInventory::form_edit/$1');
$routes->post('/admin/products/edit/(:num)', 'ItemsInventory::update/$1');

$routes->post('/admin/products/edit_image/(:num)', 'ItemsInventory::edit_img/$1');

$routes->delete('/admin/delete/(:num)', 'ItemsInventory::delete/$1');


$routes->get('/api/test', 'API::index');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
