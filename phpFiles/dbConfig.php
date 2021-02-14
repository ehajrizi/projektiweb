<?php

class DatabasePDOConfiguration{
	
	private $connection;
	
	private $host = "localhost";
	private $dbname = "projektiweb";
	private $username = "root";
	private $password = "";
	
	protected function getConnection(){
		$this -> createConnection();
		return $this -> connection;
	}
	
	protected function createConnection(){
		$this -> connection = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);
		$this -> connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}
?>