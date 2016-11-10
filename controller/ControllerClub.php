<?php

include_once("model/ModelClub.php");
include_once("model/ModelCentreDeBowling.php");
class ControllerClub {

    public $_model;

    public function __construct() {
        $this->_model = new ModelClub();
        $this->_modelCentreDeBowling = new ModelCentreDeBowling();
    }

    public function invoke() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case "rechercher":
                    $clubs = $this->_model->rechercherClub($_GET['nom']);
                    if(empty($clubs)){
                        $clubs = $this->_model->getClubList();
                        $centresDeBowling = $this->_modelCentreDeBowling->getCentreDeBowlingList();
                        include 'view/listeClub.php';
                    }
                    else
                    {
                        include 'view/listeClub.php';   
                    }        
                    break;
                case "licences":
                    $club = $this->_model->getClub($_GET['club']);
                    include 'view/listeLicence.php';
                    break;    
                case "ajouterClub":
                    $nom = $_POST["nom"];
                    $addresse = $_POST["addresse"];
                    $email = $_POST["email"];
                    $centreDeBowlingAvant = $_POST["centreDeBowling"];
                    $centreDeBowling = substr($centreDeBowlingAvant,0,1);
                    $club = $this->_model->ajouterClub($nom, $addresse, $email, $centreDeBowling);
                default:
                    echo "Erreur";
            }
        } else {
            $clubs = $this->_model->getClubList();
            include 'view/listeClub.php';
        }
    }

}

?>