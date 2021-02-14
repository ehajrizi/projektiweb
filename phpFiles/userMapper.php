<?php
require_once 'dbConfig.php';

class UserMapper extends DatabasePDOConfiguration{
	
	private $conn;
	private $query;
	
	public function __construct(){
		$this -> conn = $this -> getConnection();
	}
	
	public function getUserByID($userid){
		$this -> query = "select * from webusers where userid=:id";
		$statement = $this -> conn -> prepare($this -> query);
		$statement -> bindParam(":id",$userid);
		$statement -> execute();
		$result = $statement -> fetch(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public function getUserByUsername($username){
		$this -> query = "select * from webusers where username = :username";
		$statement = $this -> conn -> prepare($this -> query);
		$statement -> bindParam(":username",$username);
		$statement -> execute();
		$result = $statement -> fetch(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public function getAllUsers(){
		$this -> query = "select *  from webusers";
		$statement = $this -> conn -> prepare($this -> query);
		$statement -> execute();
		$result = $statement -> fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public function deleteUser($userid){
		$this -> query = "delete from webusers where userid = :userid";
		$statement -> $this -> conn -> prepare($this -> query);
		$statement -> bindParam(":username", $username);
		$statement -> execute();	
	}
	
	public function edit(\SimpleUser $user, $id)
    {
        $this->query = "update webusers set username=:username, name=:name, email=:email where userid=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $name = $user->getName();
        $email = $user->getEmail();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
	
	public function insertUser(\SimpleUser $user)
    {
        $this->query = "insert into webusers (name, username, password, email, role) values (:name, :username, :pass, :email,:role)";
        $statement = $this->conn->prepare($this->query);
		$name = $user->getName();
        $username = $user->getUsername();
        $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT);
		$email = $user->getEmail();
        $role = $user->getRole();
        $statement->bindParam(":name", $name);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":pass", $pass);
		$statement->bindParam(":email", $email);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }
	
	public function insertContactData(\ContactData $data)
    {
        $this->query = "insert into contact (firstname, lastname, subject) values (:firstname, :lastname, :subject)";
        $statement = $this->conn->prepare($this->query);
		$firstname = $data->getFirstName();
        $lastname = $data->getLastName();
        $subject = $data->getSubject();
        $statement->bindParam(":firstname", $firstname);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":subject", $subject);
        $statement->execute();
    }
	
	
	public function getAllBooks(){
		$this -> query = "select *  from books";
		$statement = $this->conn-> prepare($this -> query);
		$statement -> execute();
		$result = $statement -> fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public function getAllPlaces(){
		$this -> query = "select *  from places";
		$statement = $this->conn-> prepare($this -> query);
		$statement -> execute();
		$result = $statement -> fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public function getAllArtists(){
		$this -> query = "select *  from music";
		$statement = $this->conn-> prepare($this -> query);
		$statement -> execute();
		$result = $statement -> fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}
?>