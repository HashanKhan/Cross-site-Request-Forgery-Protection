<?php
	require_once 'C:/wamp/www/Login_d/init.php';

	$user = new User();
	$user->logout();
	
	Redirect::to('welcome.php');
?>