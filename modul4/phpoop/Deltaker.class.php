<?php

class Deltaker {
        private $etterNavn;
        private $forNavn;
        private $fAar;
	    private $yrke;

        function __construct(string $fornavn, string $etternavn, string $aar, string $yrke) {
            $this->forNavn = $fornavn;
            $this->etterNavn = $etternavn;
            $this->fAar = $aar;
            $this->yrke = $yrke;
        }

        function hentEtterNavn() : string {
           return $this->etterNavn;
        }
         function hentForNavn() : string {
           return $this->forNavn;
        }
        function hentFAar() : string {
            return $this->fAar;
        }

        function hentYrke() : string {
            return $this->yrke;
        }

        //Setters
        function settForNavn(string $fornavn) {
           $this->forNavn = $fornavn;
        }
        function settEtterNavn(string $etterNavn) {
            $this->etterNavn = $etterNavn;
        }
        function settFAar(string $aar) {
            $this->fAar = $aar;
        }
        function settYrke(string $yrke) {
            $this->yrke = $yrke;
        }
}