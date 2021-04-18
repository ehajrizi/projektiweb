<?php
    class MusicData{
		
		private $name;
		private $description;
		private $foto;
		private $link;

	   
	   public function __construct($name, $description, $foto,$link){
		   $this->name = $name;
		   $this->description = $description;
		   $this->foto = $foto;
		   $this->link = $link;
	   }

	   public function getName(){
		   return $this -> name;
	   }

	   public function getDescription(){
		   return $this -> description;
	   }
	   
	   public function getFoto(){
		   return $this -> foto;
	   }
	   public function getLink(){
		return $this -> link;
	}
	
	   
    }
?>