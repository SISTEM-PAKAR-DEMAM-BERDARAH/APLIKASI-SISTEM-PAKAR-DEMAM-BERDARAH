<?php

namespace Config;

use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\GejalaController;
use App\Controllers\Admin\PengetahuanController;
use App\Controllers\Admin\PenyakitController;
use App\Controllers\Admin\SolusiController;
use App\Controllers\Admin\UsersController;
use App\Controllers\Home;
use App\Controllers\User\LandingController;

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

//! ADMIN
$routes->get('/', [DashboardController::class, 'index']);
$routes->get('/data-pengguna', [UsersController::class, 'index']);
$routes->get('/basis-pengetahuan', [PengetahuanController::class, 'index']);
$routes->get('/data-gejala', [GejalaController::class, 'index']);
$routes->get('/data-penyakit', [PenyakitController::class, 'index']);
$routes->get('/data-solusi', [SolusiController::class, 'index']);
$routes->get('/rules-base', [DashboardController::class, 'rules']);

//! ROUTES PENYAKIT
$routes->get('/data-penyakit/create', [PenyakitController::class, 'create']);
$routes->post('/data-penyakit/insert', [PenyakitController::class, 'insert']);
$routes->post('/data-penyakit/update/(:any)', [PenyakitController::class, 'update/$1']);
$routes->get('/data-penyakit/edit/(:segment)', [PenyakitController::class, 'edit/$1']);
$routes->delete('/data-penyakit/(:any)', [PenyakitController::class, 'delete']);

//! ROUTES GEJALA
$routes->get('/data-gejala/create', [GejalaController::class, 'create']);
$routes->post('/data-gejala/insert', [GejalaController::class, 'insert']);
$routes->post('/data-gejala/update/(:any)', [GejalaController::class, 'update/$1']);
$routes->get('/data-gejala/edit/(:segment)', [GejalaController::class, 'edit/$1']);
$routes->delete('/data-gejala/(:any)', [GejalaController::class, 'delete']);

//! ROUTES BASIS PENGETAHUAN
$routes->get('/basis-pengetahuan/create', [PengetahuanController::class, 'create']);
$routes->post('/basis-pengetahuan/insert', [PengetahuanController::class, 'insert']);
$routes->post('/basis-pengetahuan/update/(:any)', [PengetahuanController::class, 'update/$1']);
$routes->get('/basis-pengetahuan/edit/(:segment)', [PengetahuanController::class, 'edit/$1']);
$routes->delete('/basis-pengetahuan/(:any)', [PengetahuanController::class, 'delete']);

//! ROUTES SOLUSI
$routes->get('/data-solusi/create', [SolusiController::class, 'create']);
$routes->post('/data-solusi/insert', [SolusiController::class, 'insert']);
$routes->delete('/data-solusi/(:any)', [SolusiController::class, 'delete']);

//! USER
$routes->get('/log-in', [LandingController::class, 'index']);
$routes->get('/home', [LandingController::class, 'home']);
$routes->get('/diagnosa', [LandingController::class, 'diagnosa']);
$routes->get('/register', [LandingController::class, 'register']);
$routes->get('/input-nilai-diagnosa', [LandingController::class, 'diagnosa2']);
$routes->get('/info', [LandingController::class, 'info']);
$routes->get('/kontak', [LandingController::class, 'kontak']);
$routes->get('/tentang', [LandingController::class, 'tentang']);

$routes->get('/edit', [LandingController::class, 'edit']);

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
