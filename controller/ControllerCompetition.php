<?php

include_once("model/ModelCompetition.php");
include_once("model/ModelClub.php");
include_once("model/ModelCentreDeBowling.php");

class ControllerCompetition {

    public $_model;
    public $_modelClub;
    public $_modelCentreDeBowling;

    public function __construct() {
        $this->_model = new ModelCompetition();
        $this->_modelClub = new ModelClub();
        $this->_modelCentreDeBowling = new ModelCentreDeBowling();
    }

    public function invoke() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case "competitions":
                    $competitions = $this->_model->getCompetitionList();
                    $clubs = $this->_modelClub->getClubList();
                    $centresDeBowling = $this->_modelCentreDeBowling->getCentreDeBowlingList();
                    //$competition = $this->_model->getCompetition($_GET['competition']);
                    include 'view/listeCompetition.php';
                    break;
                case "ajouterCompetition":
                    $denomination = $_POST["denomination"];
                    $date = $_POST["date"];
                    
                    //$competition = $this->_model->getCompetition($_GET['competition']);
                    include 'view/listeCompetition.php';
                    break;
                default:
                    echo "Erreur";
            }
        } else {
            $competitions = $this->_model->getCompetitionList();
            include 'view/listeCompetition.php';
        }
    }

}

?>