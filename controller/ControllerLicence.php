<?php

include_once("model/ModelLicence.php");
include_once("model/ModelPratiquant.php");
include_once("model/ModelClub.php");
include_once("model/ModelNiveau.php");
include_once("model/ModelCategorie.php");

class ControllerLicence {

    public $_model;
    public $_modelPratiquant;
    public $_modelClub;
    public $_modelNiveau;
    public $_modelCategorie;

    public function __construct() {
        $this->_model = new ModelLicence();
        $this->_modelPratiquant = new ModelPratiquant();
        $this->_modelClub = new ModelClub();
        $this->_modelNiveau = new ModelNiveau();
        $this->_modelCategorie = new ModelCategorie();
    }

    public function invoke() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case "licences":
                    $licences = $this->_model->getLicenceList();
                    $pratiquants = $this->_modelPratiquant->getPratiquantList();
                    $clubs = $this->_modelClub->getClubList();
                    $niveaux = $this->_modelNiveau->getNiveauList();
                    $categories = $this->_modelCategorie->getCategorieList();
                    //$competition = $this->_model->getCompetition($_GET['competition']);
                    include 'view/listeLicence.php';
                    break;
                default:
                    echo "Erreur";
            }
        } else {
            $licences = $this->_model->getLicenceList();
            include 'view/listeLicence.php';
        }
    }

}

?>