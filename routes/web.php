<?php

use app\controllers\IndexController;

$router->get('/', [IndexController::class, 'index'], 'index');
