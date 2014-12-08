<?php


class personne {
    private $idpers;
    private $nom;
    private $prenom;
    private $situation;
    private $adr;
    
    function __construct($idpers,$nom,$prenom,$situation,$adr) {
        $this->idpers = $idpers;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->situation = $situation;
        $this->adr = $adr;
    }
    function getIdpers() {
        return $this->idpers;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getSituation() {
        return $this->situation;
    }

    function getAdr() {
        return $this->adr;
    }

    function setIdpers($idpers) {
        $this->idpers = $idpers;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setSituation($situation) {
        $this->situation = $situation;
    }

    function setAdr($adr) {
        $this->adr = $adr;
    }

    
    public function __toString(){
        $etat = "personne : ".get_class($this);
        $etat .= " - idpers : ".$this->getIdpers();
        $etat .= " nom : ".$this->getNom();
        $etat .= " - prenom : ".$this->getPrenom();
        $etat .= " - situation : ".$this->getSituation();
        $etat .= " - adr : ".$this->getAdr();
        return $etat;
    }
}
