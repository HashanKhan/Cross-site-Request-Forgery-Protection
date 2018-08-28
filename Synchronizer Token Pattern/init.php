<?php
	session_start();
	
	$GLOBALS['config'] = array(
		'remember' => array(
			'cookie_name' => 'hash',
			'cookie_expire' => 604800
		),
		'session' => array(
			'session_name' => 'user',
			'token_name' => 'token'
		)
	);
	
	spl_autoload_register(function($class){
		require_once 'C:/wamp/www/Login_s/classes/' . $class . '.php';
	});
	
	require_once 'C:/wamp/www/Login_s/sanitize.php'; 
	
	if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))){
		$hash = Cookie::get(Config::get('remember/cookie_name'));
	}
?>