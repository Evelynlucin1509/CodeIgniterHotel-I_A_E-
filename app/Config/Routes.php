<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/hotel', 'Hotel::index');
$routes->get('/hotel/insertar/(:any)/(:any)', 'Hotel::insertar/$1/$2');
$routes->get('/hotel/eliminar/(:num)', 'Hotel::eliminar/$1');
$routes->get('/hotel/actualizar/(:num)/(:any)/(:any)', 'Hotel::actualizar/$1/$2/$3');
