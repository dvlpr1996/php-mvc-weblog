<?php

return [
	'base_folder' => BASE_PATH . 'public/',
	'main_method' => 'index',
	'paths' => [
		'controllers' => BASE_PATH . 'app/controllers/',
		'middlewares' => BASE_PATH . 'app/middlewares/'
	],
	'namespaces' => [
		'controllers' => 'app\controllers',
		'middlewares' => 'app\middlewares'
	],
	'debug' => env('ROUTER_DEBUG')
];

// 'cache' => CACHE_PATH . 'router/routeCache.php'