<?php
class Token {
	public static function generate(){
		return Session::put(Config::get('session/token_name'), md5(uniqid()));
	}
	
	public static function check($token){
		$tokenName = Config::get('session/token_name');
		
		if(Session::exists($tokenName) && $token === Session::get($tokenName)){
			Session::delete($tokenName);
			echo 'Valid Token Value.';
			return true;
		}
		
		echo 'Invalid Token Value!!!';
		return false;
	}
}
?>