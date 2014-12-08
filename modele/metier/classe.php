<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classe
 *
 * @author btssio
 */
class classe {
    private $codeclasse;
    private $codefiliere;
    private $libclasse;
    
    function __construct($codeclasse,$codefiliere,$libclasse) {
        $this->codeclasse=$codeclasse;
        $this->codefiliere=$codefiliere;
        $this->libclasse = $libclasse;
    }

    function getCodeclasse() {
        return $this->codeclasse;
    }

    function getCodefiliere() {
        return $this->codefiliere;
    }

    function getLibclasse() {
        return $this->libclasse;
    }

    function setCodeclasse($codeclasse) {
        $this->codeclasse = $codeclasse;
    }

    function setCodefiliere($codefiliere) {
        $this->codefiliere = $codefiliere;
    }

    function setLibclasse($libclasse) {
        $this->libclasse = $libclasse;
    }

    function __toString() {
       $etat=" Classe ".  get_class($this);
       $etat=" - codeclasse : ".$this->getCodeclasse();
       $etat=" - codefiliere : ".$this->getCodefiliere();
       $etat=" - libclasse : ".$this->getLibclasse();
       return $etat;
    }

}
