<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// Pagination sample
$routes->get('pagination', 'PaginationController::index');
$routes->get('loadRecord', 'PaginationController::loadRecord');

// CodeIgniter 4 Version Page
$routes->get('welcome', 'Welcome::index');

// CodeIgniter 3 Version Page
$routes->get('welcome/old', 'Welcome::old');

// Smarty sample
$routes->get('smarty', "Smarty::index");

// maintenance Page
$routes->get('maintenance', 'Maintenance::index');

// Pagination example
$routes->get('pgusers/(:segment)', 'PgUserController::getAll');
$routes->get('pgusers', 'PgUserController::getAll');

// Custom Pagination
$routes->get('codestar', 'Main::index');

# upload file sample
$routes->get('upload', 'Upload::index');          // Add this line.
$routes->post('upload/upload', 'Upload::upload'); // Add this line.

// Offical News Sample
$routes->match(['GET', 'POST'], 'news/create', 'News::create');
$routes->get('news/(:segment)', 'News::view/$1');
$routes->get('news', 'News::index');


// RESTful API
$routes->resource('employee');

// JWT API
$routes->group("api", function($routes){
    $routes->post('register', 'ApiRegister::index');
    $routes->post('login', 'ApiLogin::index');
    $routes->get('users', 'ApiUser::index', ['filter' => 'authFilter']);
});

// Static Pages
use App\Controllers\Pages;
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);


$routes->cli('tools/test', 'Tools::test');
$routes->cli('tools/test_password', 'Tools::test_password');
$routes->cli('tools/hello/(:segment)', 'Tools::hello/$1');
$routes->cli('tools/hello', 'Tools::index/$1');
$routes->cli('tools/index', 'Tools::index');
$routes->cli('tools', 'Tools::index');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
