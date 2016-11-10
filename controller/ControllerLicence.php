<?php

include_once("model/ModelLicence.php");

class ControllerLicence {

    public $_model;

    public function __construct() {
        $this->_model = new ModelLicence();
    }

    public function invoke() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case "licences":
                    $licences = $this->_model->getLicencesList();
                    //$competition = $this->_model->getCompetition($_GET['competition']);
                    include 'view/listeLicence.php';
                    break;
                default:
                    echo "Erreur";
            }
        } else {
            $licences = $this->_model->getLicencesList();
            include 'view/listeLicence.php';
        }
    }

}

?>