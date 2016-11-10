<?php

class Licence {

    private $numero;
    private $annee;
    private $nom;
    private $prenom;
    private $tel;
    private $idClub;
    private $idNiveau;
    private $idCategorie;


    public function __construct($p_numero, $p_annee, $p_nom, $p_prenom, $p_tel, $p_idClub, $p_idNiveau, $p_idCategorie) {
        $this->numero = $p_numero;
        $this->annee = $p_annee;
        $this->nom = $p_nom;
        $this->prenom = $p_prenom;
        $this->tel = $p_tel;
        $this->idClub = $p_idClub;
        $this->idNiveau = $p_idNiveau;
        $this->idCategorie = $p_idCategorie;
    }

    public function getDescription() {
        return $this->numero . " " . $this->nom . " " . $this->prenom;
    }

    public function getIdClub() {
        return $this->idClub;
    }
    
    public function getNumero() {
        return $this->numero;
    }
}
