<?php

use app\controllers\HomeController;

$routes->get('/', [HomeController::class, 'index'], 'home.index');

