<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Home
$routes->get('/', 'Home::index');

// Create User
$routes->get('/create-page', 'UserController::index');
$routes->post('/create-user', 'UserController::create');

// Read User
$routes->get('/list-users', 'UserController::listUsers'); // get all
$routes->get('/get-user/(:num)', 'UserController::getUser/$1'); // get user

// Update User
$routes->post('/update-user/(:num)', 'UserController::update/$1');



// $routes->get('/random-page', 'UserController');