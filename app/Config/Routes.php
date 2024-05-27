<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/listdata', 'Home::listdata');
$routes->get('/scrapping', 'Home::scrapping');
