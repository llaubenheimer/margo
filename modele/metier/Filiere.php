<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Filiere
 *
 * @author btssio
 */
class Filiere {
    private $codefiliere;
    private $idresp;
    private $libfiliere;
    
    
   function __construct($codefiliere,$idresp,$libfiliere) {
       $this->codefiliere=$codefiliere;
       $this->idresp=$idresp;
       $this->libfiliere=$libfiliere;
   }
   
   function getCodefiliere() {
       return $this->codefiliere;
   }

   function getIdresp() {
       return $this->idresp;
   }

   function getLibfiliere() {
       return $this->libfiliere;
   }

   function setCodefiliere($codefiliere) {
       $this->codefiliere = $codefiliere;
   }

   function setIdresp($idresp) {
       $this->idresp = $idresp;
   }

   function setLibfiliere($libfiliere) {
       $this->libfiliere = $libfiliere;
   }

   function __toString() {
       $etat=" Filiere ".  get_class($this);
       $etat=" - codefiliere ".$this->getCodefiliere();
       $etat=" - idresp ".$this->getIdresp();
       $etat=" - libfiliere ".$this->getLibfiliere();
   }
}
