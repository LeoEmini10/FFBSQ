<?php

class Competition {
    private $id;
    private $denomination;
    private $date;
    private $idClub;
    private $idCentreDeBowling;

    public function __construct($p_id, $p_denomination, $p_date, $p_idClub, $p_idCentreDeBowling) {
        $this->id = $p_id;
        $this->denomination = $p_denomination;
        $this->date = $p_date;
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
