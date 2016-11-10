<?php

class Niveau {

    private $id;
    private $libelle;

    public function __construct($p_id, $p_libelle) {
        $this->id = $p_id;
        $this->libelle = $p_libelle;
    }

    public function getDescription() {
        return $this->id . " " . $this->libelle ;
    }
}
