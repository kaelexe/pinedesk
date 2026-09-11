<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('api/health', static function () {
    $db = \Config\Database::connect();
    $db->query('SELECT 1');

    return service('response')->setJSON([
        'status' => 'ok',
        'database' => 'connected',
    ]);
});