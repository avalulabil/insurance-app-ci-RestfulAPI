<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/loginPost', 'AuthController::loginPost');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/policy', 'PolicyController::index');
$routes->post('/policy/create', 'PolicyController::create');
$routes->get('/policy/history', 'PolicyController::history');
$routes->get('/policy/print/(:num)', 'PolicyController::print/$1');