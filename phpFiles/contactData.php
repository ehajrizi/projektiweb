<?php
    class ContactData{
		
		private $firstname;
		private $lastname;
		private $subject;
	   
	   public function __construct($firstname, $lastname, $subject){
		   $this->firstname = $firstname;
		   $this->lastname = $lastname;
		   $this->subject = $subject;
	   }

	   public function getFirstName(){
		   return $this -> firstname;
	   }
	   
	   public function getLastName(){
		   return $this -> lastname;
	   }
	   
	   public function getSubject(){
		   return $this -> subject;
	   }

    }
?>

