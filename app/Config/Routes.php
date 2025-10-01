<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'UserController::index');
$routes->post('/create', 'UserController::create');
$routes->get('/list', 'UserController::list');