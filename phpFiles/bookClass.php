<?php
    class BookData{
		
		private $titulli;
		private $foto;
		private $autori;
		private $pershkrimi;
		private $isbn;
		private $pagenr;
	   
	   public function __construct($titulli, $foto, $autori, $pershkrimi, $isbn, $pagenr){
		   $this->titulli = $titulli;
		   $this->foto = $foto;
		   $this->autori = $autori;
		   $this->pershkrimi = $pershkrimi;
		   $this->isbn = $isbn;
		   $this->pagenr = $pagenr;
	   }

	   public function getTitulli(){
		   return $this -> titulli;
	   }
	   
	   public function getFoto(){
		   return $this -> foto;
	   }
	   
	   public function getAutori(){
		   return $this -> autori;
	   }

	   public function getPershkrimi(){
		   return $this -> pershkrimi;
	   }

	   public function getISBN(){
		   return $this -> isbn;
	   }

	   public function getPagenr(){
		   return $this -> pagenr;
	   }

    }
?>