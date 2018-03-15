<?php
class student {
        private $id;
        private $etternavn;
        private $fornavn;
        private $klasse;
        private $mobil;
        private $www;
        private $epost;  
        private $klassenavn;
       
        function __construct() { }
           
        function hentId() {
            return $this->id;   
        }   
        function hentNavn() {
            return $this->fornavn . " " . $this->etternavn;   
        }   
        function hentEtterNavn() {
        	return $this->etternavn;
        }
        function hentForNavn() {
        	return $this->fornavn;
        }
        function hentMobil() {
            return $this->mobil;
        }  
        function hentURL() {
        	return $this->www;
        } 
        function hentKlasse() {
            return $this->klasse;
        }   
          function hentEpost() {
            return $this->epost;   
        }  
        function hentKlasseNavn() {
        	return $this->klassenavn;
        } 
        //Setters
        function settForNavn($fornavn) {
        	$this->fornavn = $fornavn;
        }
        function settEtterNavn($etterNavn) {
        	 $this->etternavn = $etterNavn;
        }
        function settMobil($mobil) {
        	 $this->mobil = $mobil;
        }
        function settURL($www) {
        	 $this->www = $www;
        }
        function settKlasse($klasse) {
        	 $this->klasse = $klasse;
        }
        function settEpost($epost) {
        	 $this->epost = $epost;
        }
}
?>

