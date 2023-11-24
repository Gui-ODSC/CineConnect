<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'CineConnect::index');
$routes->get('/filmes', 'CineConnect::index');
$routes->get('/cadastro_filme', 'CineConnect::form_create');
$routes->post('/cadastro_filme/preenchimento', 'CineConnect::create_filme');
$routes->get('/cadastro_filme/mensagem', 'CineConnect::mensagem');

