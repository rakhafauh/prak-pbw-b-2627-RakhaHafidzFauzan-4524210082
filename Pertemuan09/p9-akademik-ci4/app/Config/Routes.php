<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\MahasiswaController;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->get('/mahasiswa/tambah', 'MahasiswaController::create');
$routes->post('/mahasiswa/simpan', 'MahasiswaController::store');

$routes->get('/dashboard', 'DashboardController::index');