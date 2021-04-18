<?php
    class BookData{
		
		private $titulli;
		private $foto;
		private $autori;
		private $pershkrimi;
		private $isbn;
		private $pagenr;
		private $created_by;
        private $edited_by;
	   
	   public function __construct($titulli, $foto, $autori, $pershkrimi, $isbn, $pagenr){
		   $this->titulli = $titulli;
		   $this->foto = $foto;
		   $this->autori = $autori;
		   $this->pershkrimi = $pershkrimi;
		   $this->isbn = $isbn;
		   $this->pagenr = $pagenr;
		   $this->created_by = '';
		   $this->edited_by = '';
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

	   public function getCreatedBy(){
		   return $this -> created_by;
	   }

	   public function getEditedBy(){
		   return $this -> edited_by;
	   }

    }
?>