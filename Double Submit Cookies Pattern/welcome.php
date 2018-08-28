<?php
	require_once 'C:/wamp/www/Login_d/init.php';
	
	$user = new User();
	
	if($user->isLoggedIn()){
?>
		<p>Login Success!!!</p>
		
		<p>Hello <?php echo Session::get(Config::get('session/session_name')); ?></p>
		
		<ul>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
<?php
	}else{
		echo '<p>You are not Logged In, Please <a href="login.php">Log In</a></p>';
	}