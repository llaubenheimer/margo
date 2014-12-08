<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Enseignement
 *
 * @author btssio
 */
class Enseignement {
    private $codeclasse;
    private $codemat;
    private $volumehoraireannuel;
    private $coefficient;
    
    
    function __construct($codeclasse,$codemat,$volumehoraireannuel,$coefficient) {
        $this->codeclasse=$codeclasse;
        $this->codemat=$codemat;
        $this->volumehoraireannuel=$volumehoraireannuel;
        $this->coefficient=$coefficient;
    }
    function getCodeclasse() {
        return $this->codeclasse;
    }

    function getCodemat() {
        return $this->codemat;
    }

    function getVolumehoraireannuel() {
        return $this->volumehoraireannuel;
    }

    function getCoefficient() {
        return $this->coefficient;
    }

    function setCodeclasse($codeclasse) {
        $this->codeclasse = $codeclasse;
    }

    function setCodemat($codemat) {
        $this->codemat = $codemat;
    }

    function setVolumehoraireannuel($volumehoraireannuel) {
        $this->volumehoraireannuel = $volumehoraireannuel;
    }

    function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;
    }

    public function __toString() {
        $etat="Enseignement : ".get_class($this);
        $etat .=" - codeclasse : ".$this->getCodeclasse();
        $etat .=" - codemat : ".$this->getCodemat();
        $etat .=" - volumehoraireannuel : ".$this->getVolumehoraireannuel();
        $etat .=" - coefficient : ".$this->getCoefficient();
        return $etat;
    }
    
}