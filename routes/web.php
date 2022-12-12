<?php
// mw

use app\controllers\IndexController;
use app\controllers\LoginController;

$router->get('/', [IndexController::class, 'index'], 'index');

$router->get('/login', [LoginController::class, 'index'], 'login.index');
$router->post('/login', [LoginController::class, 'store'], 'login.store');
