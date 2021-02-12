<?php
include_once 'userClass.php';


    class SimpleUser extends User{
	   
	   public function __construct($name, $username, $email, $password, $role){
		   parent::__construct($name, $username, $email, $password, $role);
	   }
	   
	   public function setSession(){
		   $_SESSION['role'] = 0;
		   $_SESSION['roleName'] = "SimpleUser";
	   }
	   
	   public function setCookie(){
		   setcookie("username", $this -> getUsername(), time() + 24 * 60 * 60); //per 1 dite
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