<?php

//spl_autoload_extensions(".php");
//spl_autoload_register();
include_once "Database.php";
include_once "model/Niveau.php";


class ModelCompetition {

    private $_dbConnexion;

    public function __construct() {
        $this->_dbConnexion = new Database('localhost', 'root', 'root', 'ffbsq');
    }

    public function getNiveauList() {
        $listNiveau = array();
        $niveau = $this->_dbConnexion->requete("SELECT * FROM niveau");
        foreach ($niveaux as $niveau) {
            $tempNiveau = new Niveau($niveau->id, $niveau->libelle);
            array_push($listNiveau, $tempNiveau);
        }
        return $listNiveau;
    }

    public function getNiveau($id) {
        $listNiveau = $this->getNiveauList();
        foreach ($listNiveaux as $niveau) {
            if ($niveau->getId() == $id) {
                return $niveau;
            }
        }
    }
}

?>