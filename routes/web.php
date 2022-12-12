<?php
// mw
use app\controllers\PostController;
use app\controllers\IndexController;
use app\controllers\LoginController;
use app\controllers\WriterController;
use app\controllers\RegisterController;

$router->get('/', [IndexController::class, 'index'], 'index');
$router->get('/writer/:slug', [WriterController::class, 'index'], 'writer.index');
$router->get('/post/:slug', [PostController::class, 'index'], 'post.index');

$router->get('/login', [LoginController::class, 'create'], 'login.create');
$router->post('/login', [LoginController::class, 'store'], 'login.store');

$router->get('/register', [RegisterController::class, 'create'], 'register.create');
$router->post('/register', [RegisterController::class, 'store'], 'register.store');
