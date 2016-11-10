<?php

class Categorie {

    private $id;
    private $libelle;
    private $ageMin;
    private $ageMax;
    


    public function __construct($p_id, $p_libelle, $p_ageMin, $p_ageMax) {
        $this->id = $p_id;
        $this->libelle = $p_libelle;
        $this->ageMin = $p_ageMin;
        $this->ageMax = $p_ageMax;   
    }

    public function getDescription() {
        return $this->libelle . " " . $this->ageMin . " " . $this->ageMax;
    }
}
