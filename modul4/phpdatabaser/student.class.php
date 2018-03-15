<?php
class student {
        private $id;
        private $etternavn;
        private $fornavn;
        private $klasse;
        private $mobil;
        private $www;
        private $epost;  
       
        function __construct() { }
    
        function hentId() {
            return $this->id;   
        }

        function hentFornavn() {
            return $this->fornavn;
        }

        function hentEtternavn() {
            return $this->etternavn;
        }

        function hentNavn() {
            return $this->fornavn . " " . $this->etternavn;
        }   
        function hentMobil() {
            return $this->mobil;   
        }   
        function hentKlasse() {
            return $this->klasse;   
        }

        function hentWww() {
            return $this->www;
        }

          function hentEpost() {
            return $this->epost;
        }   
}
?>

