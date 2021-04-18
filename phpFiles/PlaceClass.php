<?php
    class PlaceData{
		
		private $name;
		private $description;
		private $link;
		private $act_img;
		private $name_act;
		private $description_act;
	   
	   public function __construct($name, $description, $link){
		   $this->name = $name;
		   $this->description = $description;
		   $this->link = $link;
	   }

	   public function getName(){
		   return $this -> name;
	   }
	   
	   public function getDescription(){
		   return $this -> description;
	   }
	   
	   public function getLink(){
		   return $this -> link;
	   }


    }
?>