<?php

class Deltaker {
        private $etterNavn;
        private $forNavn;
        private $fAar;
        /** @var string */
	    private $yrke;

        function __construct($fornavn, $etternavn, $aar, $yrke) {
            $this->forNavn = $fornavn;
            $this->etterNavn = $etternavn;
            $this->fAar = $aar;
            $this->yrke = $yrke;
        }

        function hentEtterNavn() {
           return $this->etterNavn;
        }
         function hentForNavn() {
           return $this->forNavn;
        }
        function hentFAar() {
            return $this->fAar;
        }

        function hentYrke() {
            return $this->yrke;
        }

        //Setters
        function settForNavn($fornavn) {
           $this->forNavn = $fornavn;
        }
        function settEtterNavn($etterNavn) {
            $this->etterNavn = $etterNavn;
        }
        function settFAar($aar) {
            $this->fAar = $aar;
        }
        function settYrke($yrke) {
            $this->yrke = $yrke;
        }
}