<?php

//spl_autoload_extensions(".php");
//spl_autoload_register();
include_once "Database.php";
include_once "model/Categorie.php";


class ModelCategorie {

    private $_dbConnexion;

    public function __construct() {
        $this->_dbConnexion = new Database('localhost', 'root', 'root', 'ffbsq');
    }

    public function getCategorieList() {
        $listCategorie = array();
        $categories = $this->_dbConnexion->requete("SELECT * FROM categorie");
        foreach ($categories as $categorie) {
            $tempCategorie = new Categorie($categorie->id, $categorie->libelle, $categorie->ageMin, $categorie->ageMax);
            array_push($listCategorie, $tempCategorie);
        }
        return $listCategorie;
    }

    public function getCategorie($id) {
        $listCategorie = $this->getCompetitionList();
        foreach ($listCategories as $categorie) {
            if ($categorie->getId() == $id) {
                return $categorie;
            }
        }
    }
}

?>