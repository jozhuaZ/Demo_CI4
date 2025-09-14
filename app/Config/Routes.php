<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/register-page', 'RegistrationController::index');
$routes->post('/u/register', 'RegistrationController::registerUser');
