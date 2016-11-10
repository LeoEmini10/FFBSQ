<?php

//spl_autoload_extensions(".php");
//spl_autoload_register();
include_once "Database.php";
include_once "model/Competition.php";

class ModelCompetition {

    private $_dbConnexion;

    public function __construct() {
        $this->_dbConnexion = new Database('localhost', 'root', 'root', 'ffbsq');
    }

    public function getCompetitionList() {
        $listCompetition = array();
        $competitions = $this->_dbConnexion->requete("SELECT * FROM competition");
        foreach ($competitions as $competition) {
            $tempCompetition = new Competition($competition->id, $competition->denomination, $competition->date, $competition->idClub, $competition->idCentreDeBowling, $competition->idCategorie);
            array_push($listCompetition, $tempCompetition);
        }
        return $listCompetition;
    }

    public function getCompetition($id) {
        $listCompetition = $this->getCompetitionList();
        foreach ($listCompetitions as $competition) {
            if ($competition->getId() == $id) {
                return $competition;
            }
        }
    }
    
    public function ajouterCompetition($denomination, $date, $club, $centreDeBowling, $categorie) {
        $sql = "insert into competition (denomination, date, idClub, idCentreDeBowling, idCategorie) VALUES ('$denomination', '$date', '$club', '$centreDeBowling', '$categorie')";
        $ajoutCompetition = $this->_dbConnexion->reqUpdate($sql);
    }
}

?>