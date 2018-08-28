<?php
	require_once 'C:/wamp/www/Login_d/init.php';
	
	Token::generate();
	
	if(Input::exists()){
		if(Token::check(Input::get('ctoken'))){
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'username' => array('required' => true),
				'password' => array('required' => true)
			));
			
			if($validation->passed()){
				$user = new User();
				$login = $user->login(Input::get('username'),Input::get('password'));
				
				if($login){
					Redirect::to('welcome.php');
				}else{
					echo '<p>Sorry, the Username or the Password is Wrong!!!</p>';
				}
					
			}else{
				foreach($validation->errors() as $error){
					echo $error, '<br>';
				}
			}
		}
	}
?>
<html>
<head>
	<title>User Login</title>
	<script>
		function getCookieValue(a) {
			var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
			return b ? b.pop() : '';
		}
	</script>
</head>
<body>
	<form action="" method="post">
		<div class="field">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" autocomplete="off">
		</div><br>
		<div class="field">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" autocomplete="off">
		</div><br>
		
		<input id="token" type="hidden" name="ctoken">
		<input type="submit" name="login" value="Login">
	</form>
</body>
	<script>
		document.getElementById('token').value=getCookieValue('csrf');
	</script>
</html>










