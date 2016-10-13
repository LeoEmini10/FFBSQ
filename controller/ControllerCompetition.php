<?php

include_once("model/ModelCompetition.php");

class ControllerCompetition {

    public $_model;

    public function __construct() {
        $this->_model = new ModelCompetition();
    }

    public function invoke() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case "competitions":
                    $competitions = $this->_model->getCompetitionList();
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