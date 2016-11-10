<?php

//spl_autoload_extensions(".php");
//spl_autoload_register();
include_once "Database.php";
include_once "model/CentreDeBowling.php";


class ModelCentreDeBowling {

    private $_dbConnexion;

    public function __construct() {
        $this->_dbConnexion = new Database('localhost', 'root', 'root', 'ffbsq');
    }

    public function getCentreDeBowlingList() {
        $listCentreDeBowling = array();
        $centreDeBowling = $this->_dbConnexion->requete("SELECT * FROM centredebowling");
        foreach ($centreDeBowlings as $centreDeBowling) {
            $tempCentreDeBowling = new CentreDeBowling($centreDeBowling->id, $centreDeBowling->nom);
            array_push($listCentreDeBowling, $tempCentreDeBowling);
        }
        return $listCentreDeBowling;
    }

    public function getCentreDeBowling($id) {
        $listCentreDeBowling = $this->getCentreDeBowlingList();
        foreach ($listCentreDeBowlings as $CentreDeBowling) {
            if ($centreDeBowling->getId() == $id) {
                return $centreDeBowling;
            }
        }
    }
}

?>