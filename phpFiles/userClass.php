<?php

abstract class User{
	
	protected $name;
	protected $username;
	protected $email;
	protected $password;
	protected $role;
	
	function __construct($name, $username, $email, $password, $role){
		$this -> name = $name;
		$this -> username = $username;
		$this -> email = $email;
		$this -> password = $password;
		$this -> role = $role;
	}
	
	abstract protected function setSession();
	abstract protected function setCookie();
}

?>