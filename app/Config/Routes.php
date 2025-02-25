<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admission', 'StudentController::create');
$routes->post('/submit-form', 'StudentController::store');
