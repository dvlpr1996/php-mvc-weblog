<?php
// mw
use app\controllers\IndexController;
use app\controllers\LoginController;
use app\controllers\RegisterController;

$router->get('/', [IndexController::class, 'index'], 'index');

$router->get('/login', [LoginController::class, 'create'], 'login.create');
$router->post('/login', [LoginController::class, 'store'], 'login.store');

$router->get('/register', [RegisterController::class, 'create'], 'register.create');
$router->post('/register', [RegisterController::class, 'store'], 'register.store');
