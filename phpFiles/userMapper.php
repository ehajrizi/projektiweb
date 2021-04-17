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

	public function getUserByName($name){
		$this -> query = "select * from webusers where name = :name";
		$statement = $this -> conn -> prepare($this -> query);
		$statement -> bindParam(":name",$name);
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
	
	
	public function edit(\SimpleUser $user, $userid)
    {
        $this->query = "update webusers set username=:username,name=:name,email=:email,role=:role where userid=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $name = $user->getName();
        $email = $user->getEmail();
        $role = $user->getRole();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":role", $role);
        $statement->bindParam(":id", $userid);
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
	
	public function getAllContactData(){
		$this -> query = "select *  from contact";
		$statement = $this->conn-> prepare($this -> query);
		$statement -> execute();
		$result = $statement -> fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function insertBookData(\BookData $data)
    {
        $this->query = "insert into books (titulli, foto, autori, pershkrimi, isbn, pagenr) values (:titulli, :foto, :autori, :pershkrimi, :isbn, :pagenr)";
        $statement = $this->conn->prepare($this->query);
		$titulli = $data->getTitulli();
        $foto = $data->getFoto();
        $autori = $data->getAutori();
        $pershkrimi = $data->getPershkrimi();
        $isbn = $data->getISBN();
        $pagenr = $data->getPagenr();
        $statement->bindParam(":titulli", $titulli);
        $statement->bindParam(":foto", $lastname);
        $statement->bindParam(":autori", $autori);
        $statement->bindParam(":pershkrimi", $pershkrimi);
        $statement->bindParam(":isbn", $isbn);
        $statement->bindParam(":pagenr", $pagenr);
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
	
		public function deleteUser($userid){
		$this->query = "delete from webusers where userid=:userid";
		$statement = $this->conn->prepare($this->query);
		$statement -> bindParam(":userid", $userid);
		$statement -> execute();	
	}

	public function deleteContact($contactid){
		$this->query = "delete from contact where contactid=:contactid";
		$statement = $this->conn->prepare($this->query);
		$statement -> bindParam(":contactid", $contactid);
		$statement -> execute();	
	}

	public function deleteBook($bookid){
		$this->query = "delete from books where bookid=:bookid";
		$statement = $this->conn->prepare($this->query);
		$statement -> bindParam(":bookid", $bookid);
		$statement -> execute();	
	}

	public function deleteArtist($artistid){
		$this->query = "delete from music where artistid=:artistid";
		$statement = $this->conn->prepare($this->query);
		$statement -> bindParam(":artistid", $artistid);
		$statement -> execute();	
	}

		public function deletePlace($placeid){
		$this->query = "delete from places where placeid=:placeid";
		$statement = $this->conn->prepare($this->query);
		$statement -> bindParam(":placeid", $placeid);
		$statement -> execute();	
	}
	
		public function getBookByTitle($titulli){
		$this->query = "select * from books where titulli = :titulli";
		$statement = $this->conn->prepare($this->query);
		$statement -> bindParam(":titulli",$titulli);
		$statement -> execute();
		$book = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $book;
		}

	




}