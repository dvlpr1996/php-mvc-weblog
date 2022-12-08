<?php

use app\controllers\HomeController;

$router->get('/', [HomeController::class, 'index'], 'index');
$router->post('/send', [HomeController::class, 'send'], 'send');
