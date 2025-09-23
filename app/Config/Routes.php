<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// auth routes
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::registerSave');
$routes->get('/login', 'Auth::login');
