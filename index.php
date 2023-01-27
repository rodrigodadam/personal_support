<?php
	define('HOST', 'localhost');
	define('DATABASE', 'suporte_personalizado');
	define('USER', 'root');
	define('PASSWORD', '');

	$autoload = function($class){
		include($class.'.php');
	};

	spl_autoload_register($autoload);

	Router::get('/',function(){
		
	});

?>