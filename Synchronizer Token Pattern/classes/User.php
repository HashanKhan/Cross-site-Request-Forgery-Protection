<?php
	class User{
		private $_sessionName,
				$_isLoggedIn,
				$_cookieName;
			
		public function __construct($user = null){
			$this->_sessionName = Config::get('session/session_name');
			$this->_cookieName = Config::get('remember/cookie_name');
			
			if(!$user){
				if(Session::exists($this->_sessionName)){
					$user = Session::get($this->_sessionName);
					
					if($user){
						$this->_isLoggedIn = true;
					}else{
						//logout
					}
				}
			}else{
				echo 'User Not Logged in!!!';
			}
		}
	
		public function login($username,$password){
			$uname = "admin";
			$pwd = "admin";
		
			if($username == $uname && $password == $pwd){
				Session::put($this->_sessionName,$username);
				
				$hash = Hash::unique();
				
				Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expire'));
				
				return true;
			}
				return false;
		}
		
		public function isLoggedIn(){
			return $this->_isLoggedIn;
		}
		
		public function logout(){
			Session::delete($this->_sessionName);
			Cookie::delete($this->_cookieName);
		}
	}
?>