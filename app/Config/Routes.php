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
$routes->group('/register', function ($routes) {
    $routes->get('/', 'Auth::register');
    $routes->post('/', 'Auth::store');
});
$routes->group('/login', function ($routes) {
    $routes->get('/', 'Auth::login');
    $routes->post('/', 'Auth::loginProses');
});
$routes->get('/logout', 'Auth::logout');
$routes->group('/dashboard', function ($routes) {
    $routes->get('/', 'Dashboard::index/');
    $routes->post('/', 'Dashboard::profile/');
});
// $routes->get('/dashboard', 'Dashboard::index/');
$routes->get('/peringkat', 'Peringkat::index/');
$routes->get('/profile', 'Auth::profil');
$routes->get('/ubah_profile', 'Profile::edit_profile');
$routes->get('/petunjuk', 'Petunjuk::index/');
$routes->get('/cuaca', 'Cuaca::index/');
// hewan
$routes->get('/hewan-1', 'Hewan::index/');
$routes->get('/hewan-2', 'Hewan::index2/');
$routes->get('/hewan-3', 'Hewan::index3/');
$routes->get('/hewan-4', 'Hewan::index4/');
$routes->get('/hewan-5', 'Hewan::index5/');
// benda
$routes->get('/benda-1', 'Benda::index/');
$routes->get('/benda-2', 'Benda::index2/');
$routes->get('/benda-3', 'Benda::index3/');
$routes->get('/benda-4', 'Benda::index4/');
$routes->get('/benda-5', 'Benda::index5/');
// tubuh
$routes->get('/tubuh-1', 'Tubuh::index/');
$routes->get('/tubuh-2', 'Tubuh::index2/');
$routes->get('/tubuh-3', 'Tubuh::index3/');
$routes->get('/tubuh-4', 'Tubuh::index4/');
// tumbuhan
$routes->get('/tumbuhan-1', 'Tumbuhan::index/');
$routes->get('/tumbuhan-2', 'Tumbuhan::index2/');
$routes->get('/tumbuhan-3', 'Tumbuhan::index3/');
$routes->get('/tumbuhan-4', 'Tumbuhan::index4/');
$routes->get('/tumbuhan-5', 'Tumbuhan::index5/');

$routes->get('/Auth/submitData', 'Auth::submitData/');

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
