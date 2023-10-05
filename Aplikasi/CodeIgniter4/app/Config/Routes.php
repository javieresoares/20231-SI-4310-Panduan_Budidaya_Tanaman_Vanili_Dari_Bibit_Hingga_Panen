<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('/register', 'AuthController::register');
$routes->add('/register', 'AuthController::register'); 

$routes->get('/login', 'AuthController::login');
$routes->add('/login', 'AuthController::login'); 
$routes->get('/logout', 'AuthController::logout');
