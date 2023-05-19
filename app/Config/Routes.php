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
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/', 'HomeController::index');
$routes->get('/films', 'FilmsController::index');
$routes->get('/artistes', 'ArtistesController::index');

// $routes->group('utilisateur', function($routes) {
//     $routes->add('inscription', 'UtilisateurController::create');
//     $routes->post('inscription', 'UtilisateurController::store');
//     $routes->add('success', 'UtilisateurController::success');
// });
$routes->get('utilisateur/inscription', 'UtilisateurController::create');
$routes->post('utilisateur/inscription', 'UtilisateurController::store');
$routes->add('utilisateur/success', 'UtilisateurController::success');


//  $routes->get('login', 'AuthController::index2');
// $routes->post('login', 'AuthController::login');
// $routes->get('logout', 'AuthController::logout');

// $routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
//     $routes->get('auth/connexion', 'Auth::index2');
//     $routes->post('auth/connexion', 'Auth::login');
//     $routes->get('auth/logout', 'Auth::logout');
// });


$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('auth/connexion', 'AuthController::index2', ['as' => 'auth.connexion']);
    $routes->post('auth/login', 'AuthController::login', ['as' => 'auth.login']);
    $routes->get('/', 'HomeController::index');
    $routes->get('auth/logout', 'AuthController::logout');
});





// $routes->match(['get', 'post'], 'auth/login', 'AuthController::login');


// $routes->get('/', 'HomeController::index');
// $routes->get('/artistes', 'ArtistesController::index');
// $routes->get('/artistes/create', 'ArtistesController::create');
// $routes->post('/artistes/create', 'ArtistesController::create');
// $routes->get('/artistes/update/(:num)', 'ArtistesController::update/$1');
// $routes->post('/artistes/update/(:num)', 'ArtistesController::update/$1');
// $routes->get('/artistes/delete/(:num)', 'ArtistesController::delete/$1');
// $routes->get('/films', 'FilmsController::index');
// $routes->get('/films/create', 'FilmsController::create');
// $routes->post('/films/create', 'FilmsController::create');
// $routes->get('/films/edit/(:num)', 'FilmsController::edit/$1');
// $routes->post('/films/edit/(:num)', 'FilmsController::edit/$1');
// $routes->get('/films/delete/(:num)', 'FilmsController::delete/$1');

// $routes->get('/', 'HomeController::index');

// $routes->group('films', ['namespace' => 'App\Controllers'], function($routes)
// {
// 	$routes->get('/', 'FilmController::index');
// 	$routes->get('ajouter', 'FilmController::ajouter');
// 	$routes->post('ajouter', 'FilmController::ajouter');
// 	$routes->get('modifier/(:num)', 'FilmController::modifier/$1');
// 	$routes->post('modifier/(:num)', 'FilmController::modifier/$1');
// 	$routes->get('supprimer/(:num)', 'FilmController::supprimer/$1');
// });

// $routes->group('artistes', ['namespace' => 'App\Controllers'], function($routes)
// {
// 	$routes->get('/', 'ArtisteController::index');
// 	$routes->get('ajouter', 'ArtisteController::ajouter');
// 	$routes->post('ajouter', 'ArtisteController::ajouter');
// 	$routes->get('modifier/(:num)', 'ArtisteController::modifier/$1');
// 	$routes->post('modifier/(:num)', 'ArtisteController::modifier/$1');
// 	$routes->get('supprimer/(:num)', 'ArtisteController::supprimer/$1');
// });

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->get('products', 'Home::products');
// $routes->get('accueil', 'Accueil::accueil');
// $routes->get('test', 'Accueil::test');
// route pour la page d'accueil
// $routes->get('/', 'Accueil::index');

// route pour la page contact
// $routes->get('contact', 'Accueil::index1');

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
