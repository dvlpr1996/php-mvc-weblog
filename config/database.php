<?php

return [
	'driver'    => 'mysql',
	'host'      =>env('HOST'),
	'database'  =>env('DATABASE'),
	'username'  =>env('USERNAME'),
	'password'  =>env('PASSWORD'),
	'charset'   =>env('CHARSET'),
	'collation' =>env('COLLATION'),
	'cachedir'	=> CACHE_PATH . 'sql/sql.php'
];
