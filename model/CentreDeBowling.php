<?php

class CentreDeBowling {

    private $id;
    private $nom;

    public function __construct($p_id, $p_nom) {
        $this->id = $p_id;
        $this->nom = $p_nom;
    }

    public function getNom() {
        return $this->nom;
    }

}
