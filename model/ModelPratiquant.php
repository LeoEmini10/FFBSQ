<?php

//spl_autoload_extensions(".php");
//spl_autoload_register();
include_once "Database.php";
include_once "model/Pratiquant.php";


class ModelPratiquant {

    private $_dbConnexion;

    public function __construct() {
        $this->_dbConnexion = new Database('localhost', 'root', 'root', 'ffbsq');
    }

    public function getPratiquantList() {
        $listPratiquant = array();
        $pratiquant = $this->_dbConnexion->requete("SELECT * FROM pratiquant");
        foreach ($pratiquants as $pratiquant) {
            $tempPratiquant = new Pratiquant($pratiquant->id, $pratiquant->nom, $pratiquant->prenom, $pratiquant->adresse, $pratiquant->email);
            array_push($listPratiquant, $tempPratiquant);
        }
        return $listPratiquant;
    }

    public function getPratiquant($id) {
        $listPratiquant = $this->getPratquantList();
        foreach ($listPratiquants as $pratiquant) {
            if ($pratiquant->getId() == $id) {
                return $pratiquant;
            }
        }
    }
}

?>