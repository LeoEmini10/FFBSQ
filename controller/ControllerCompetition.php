<?php

include_once("model/ModelCompetition.php");
include_once("model/ModelClub.php");
include_once("model/ModelCentreDeBowling.php");
include_once ("model/ModelCategorie.php");

class ControllerCompetition {

    public $_model;
    public $_modelClub;
    public $_modelCentreDeBowling;
    public $_modelCategorie;

    public function __construct() {
        $this->_model = new ModelCompetition();
        $this->_modelClub = new ModelClub();
        $this->_modelCentreDeBowling = new ModelCentreDeBowling();
        $this->_modelCategorie = new ModelCategorie();
    }

    public function invoke() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case "competitions":
                    $competitions = $this->_model->getCompetitionList();
                    $clubs = $this->_modelClub->getClubList();
                    $centresDeBowling = $this->_modelCentreDeBowling->getCentreDeBowlingList();
                    $categories = $this->_modelCategorie->getCategorieList();
                    //$competition = $this->_model->getCompetition($_GET['competition']);
                    include 'view/listeCompetition.php';
                    break;
                case "ajouterCompetition":
                    $denomination = $_POST["denomination"];
                    $date = $_POST["date"];
                    $club = $_POST["club"];
                    $centreDeBowlingAvant = $_POST["centreDeBowling"];
                    $centreDeBowling = substr($centreDeBowlingAvant, 0, 1);
                    $categorieAvant = $_POST["categorie"];
                    $categorie = substr($categorieAvant, 0, 1);
                    $competition= $this->_model->ajouterCompetition($denomination, $date, $club, $centreDeBowling, $categorie);
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