<?php

return [
	'driver'    => 'mysql',
	'host'      =>$_ENV['HOST'],
	'database'  =>$_ENV['DATABASE'],
	'username'  =>$_ENV['USERNAME'],
	'password'  =>$_ENV['PASSWORD'],
	'charset'   =>$_ENV['CHARSET'],
	'collation' =>$_ENV['COLLATION'],
	'cachedir'	=> CACHE_PATH . 'sql/sql.php'
];
