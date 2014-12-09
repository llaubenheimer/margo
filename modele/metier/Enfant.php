<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Enfant
 *
 * @author btssio
 */
class Enfant {
    private $idenfant;
    private $idpers;
    private $prenom;
    private $datenaiss;
    
    function __construct($idenfant, $idpers, $prenom, $datenaiss) {
        $this->idenfant=$idenfant;
        $this->idpers=$idpers;
        $this->prenom=$prenom;
        $this->datenaiss=$datenaiss;
    }
    
    function getIdenfant() {
        return $this->idenfant;
    }

    function getIdpers() {
        return $this->idpers;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDatenaiss() {
        return $this->datenaiss;
    }

    function setIdenfant($idenfant) {
        $this->idenfant = $idenfant;
    }

    function setIdpers($idpers) {
        $this->idpers = $idpers;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDatenaiss($datenaiss) {
        $this->datenaiss = $datenaiss;
    }

    function __toString() {
        $etat=" Enfant ".get_class($this);
        $etat=" -idenfant ".$this->getIdenfant();
        $etat=" - idpers ".$this->getIdpers();
        $etat=" - prenom ".$this->getPrenom();
        $etat=" - datenaiss ".$this->getDatenaiss();
    }
}
