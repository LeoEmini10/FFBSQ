<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Competition
 *
 * @author gurbuz.harun
 */
class Competition {
    private $id;
    private $denomination;
    private $date;
    private $idClub;
    private $idCentreDeBowling;

    public function __construct($p_id, $p_denomination, $p_date, $p_idClub, $p_idCentreDeBowling) {
        $this->id = $p_numero;
        $this->denomination = $p_nom;
        $this->date = $p_prenom;
        $this->idClub = $p_idClub;
        $this->idCentreDeBowling = $p_idCentreDeBowling;
    }

    public function getId() {
        return $this->id;
    }
    
    public function getDescription() {
        return $this->denomination . " " .$this->date;
    }

    public function getIdClub() {
        return $this->idClub;
    }
        
    public function getIdCentreDeBowling() {
        return $this->idCentreDeBowling;
    }
}
