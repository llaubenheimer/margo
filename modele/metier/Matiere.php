<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Matiere
 *
 * @author btssio
 */
class Matiere {
    private $codemat;
    private $libmat;
    
    function __construct($codemat,$libmat) {
        $this->codemat=$codemat;
        $this->libmat=$libmat;
    }
    
    function getCodemat() {
        return $this->codemat;
    }

    function getLibmat() {
        return $this->libmat;
    }

    function setCodemat($codemat) {
        $this->codemat = $codemat;
    }

    function setLibmat($libmat) {
        $this->libmat = $libmat;
    }

    function __toString() {
        $etat=" Matiere ".  get_class($this);
        $etat=" - codemat ".$this->getCodemat();
        $etat=" - libmat ".$this->getLibmat();
    }
}
