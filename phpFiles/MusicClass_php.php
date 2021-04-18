<?php
    class MusicData{
		
		private $name;
		private $description;
		private $foto;

	   
	   public function __construct($name, $description, $foto){
		   $this->name = $name;
		   $this->description = $description;
		   $this->foto = $foto;
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
	   
    }
?>