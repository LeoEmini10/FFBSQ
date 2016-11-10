<?php

class Niveau {

    private $id;
    private $libelle;

    public function __construct($p_id, $p_libelle) {
        $this->id = $p_id;
        $this->libelle = $p_libelle;
    }

    public function getDescription() {
        return $this->libelle ;
    }
    
    public function getId() {
        return $this->id;
    }
}
