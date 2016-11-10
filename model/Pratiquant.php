<?php

class Pratiquant {

    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $email;
   

    public function __construct($p_id, $p_nom, $p_prenom, $p_adresse, $p_email) {
        $this->id = $p_id;
        $this->nom = $p_nom;
        $this->prenom = $p_prenom;
        $this->adresse = $p_adresse;
        $this->email = $p_email;
    }

    public function getDescription() {
        return $this->nom . " " . $this->prenom ;
    }
    
    public function getId() {
        return $this->id;
    }
}
