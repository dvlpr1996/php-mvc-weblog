<?php

use app\controllers\HomeController;

$routes->get('/', [HomeController::class, 'index'], 'index');
$routes->post('/send', [HomeController::class, 'send'], 'send');
