<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
    
/*
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
//rutas  front
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('home/quienes_somos', 'Home::quienes_somos');
$routes->get('home/contacto', 'Home::contacto');
$routes->get('home/registrarse', 'Home::registrarse');
$routes->get('home/login', 'Home::login');
$routes->get('register', 'UsuarioController::create');
$routes->post('register', 'UsuarioController::formValidation');
$routes->get('login', 'UsuarioController::login');
$routes->post('login', 'UsuarioController::loginValidation');
$routes->get('/admin', 'UsuarioController::index');
$routes->get('/admin/edit/(:num)', 'UsuarioController::edit/$1');
$routes->post('/admin/update/(:num)', 'UsuarioController::update/$1');
$routes->get('/admin/delete/(:num)', 'UsuarioController::delete/$1');


$routes->get('/logout', 'UsuarioController::logout');








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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
