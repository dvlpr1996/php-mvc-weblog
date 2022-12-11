<?php

use app\controllers\HomeController;

$router->get('/', [HomeController::class, 'index'], 'index');
$router->post('/send/:id/:slug', [HomeController::class, 'send'], 'send');
