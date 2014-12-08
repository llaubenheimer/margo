<?php


class produit {
    private $ref;
    private $designation;
    private $prix;
    private $image;
    private $categorie;
    
    function __construct($ref,$designation,$prix,$image,$categorie) {
        $this->ref = $ref;
        $this->designation = $designation;
        $this->prix = $prix;
        $this->image = $image;
        $this->categorie = $categorie;
    }
    public function getRef() {
        return $this->ref;
    }

    public function getDesignation() {
        return $this->designation;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getImage() {
        return $this->image;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function setRef($ref) {
        $this->ref = $ref;
    }

    public function setDesignation($designation) {
        $this->designation = $designation;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    public function __toString(){
        $etat = "produit : ".get_class($this);
        $etat .= " - ref : ".$this->getRef();
        $etat .= " designation : ".$this->getDesignation();
        $etat .= " - prix : ".$this->getPrix();
        $etat .= " - image : ".$this->getImage();
        $etat .= " - categorie : ".$this->getCategorie();
        return $etat;
    }
}
