<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'MahasiswaController::index');

$routes->get('/mahasiswa', 'MahasiswaController::index');

$routes->get('/mahasiswa/tambah', 'MahasiswaController::create');
$routes->post('/mahasiswa/simpan', 'MahasiswaController::store');

$routes->get('/mahasiswa/edit/(:num)', 'MahasiswaController::edit/$1');
$routes->post('/mahasiswa/update/(:num)', 'MahasiswaController::update/$1');

$routes->post('/mahasiswa/hapus/(:num)', 'MahasiswaController::delete/$1');

$routes->get('/dashboard', 'DashboardController::index');