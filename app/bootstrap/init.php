<?php

use app\core\adapter\DotEnvAdapter;
use app\core\adapter\RouterAdapter;
use app\exceptions\EnvVariableNotDefinedException;

define('BASE_APP_PATH', __DIR__ . '../../../');

require_once realpath(BASE_APP_PATH . 'vendor/autoload.php');

try {
    (new DotEnvAdapter)->requiredElement();
} catch (EnvVariableNotDefinedException $e) {
    $e->getMessage();
}

ini_set('display_errors', config('error.display_errors'));
ini_set('display_startup_errors', config('error.display_startup_errors'));
error_reporting(config('error.error_reporting'));

require_once BASE_APP_PATH . 'app/helper/constants.php';

$router = new RouterAdapter;
