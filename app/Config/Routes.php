<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product/detail', 'Product::detail');
$routes->get('/search', 'Home::search');
$routes->get('/checkout', 'Order::checkout');
$routes->get('/profile/edit', 'Profile::edit');
$routes->get('/profile/password', 'Profile::changePassword');
$routes->get('/profile/ahli-waris', 'Profile::ahliWaris');