<?php
include_once 'userClass.php';

 class Admin extends User{
	 
	public function __construct($name, $username, $email, $password, $role){
		parent::__construct($name, $username, $email, $password, $role);
	}
 
	public function setSession(){
		$_SESSION['role'] = 1;
		$_SESSION['roleName'] = "Administrator";
	}
 
	public function setCookie(){
		setcookie("username", $this -> getUsername(), time() + 24 * 60 * 60);
	}
 
	public function getName(){
		return $this -> name;
	}
	   
    public function getUsername(){
		return $this -> username;
	}
	   
	public function getEmail(){
		return $this -> email;
	}
	   
	public function getPassword(){
		return $this -> password;
	}
	   
	public function getRole(){
		return $this -> role;
	} 
 }
?>