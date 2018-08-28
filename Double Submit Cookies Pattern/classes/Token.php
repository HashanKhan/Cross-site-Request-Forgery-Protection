<?php
class Token {
	public static function generate(){
		return setcookie("csrf", Session::put(Config::get('session/token_name'), md5(uniqid())), time() + 3600, "/","localhost");
	}
	
	public static function check($token){
		if($token == $_COOKIE['csrf']){
			echo 'Valid Token Value.';
			return true;
		}
		
		echo 'Invalid Token Value!!!';
		return false;
	}
}
?>
