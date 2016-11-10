<?php

//spl_autoload_extensions(".php");
//spl_autoload_register();
include_once "Database.php";
include_once "model/Licence.php";

class ModelLicence {

    private $_dbConnexion;

    public function __construct() {
        $this->_dbConnexion = new Database('localhost', 'root', '', 'ffbsq');
    }

    public function getLicenceList() {
        $listLicence = array();
        $licences = $this->_dbConnexion->requete("SELECT * FROM licence");
        foreach ($licences as $licence) {
            $tempLicence = new Licence($licence->numero, $licence->annee, $licence->nom, $licence->prenom, $licence->tel, $licence->idPratiquant, $licence->idClub, $licence->idNiveau, $licence->idCategorie );
            array_push($listLicence, $tempLicence);
        }
        return $listLicence;
    }

    public function getLicence($id) {
        $listLicence = $this->getLicencesList();
        foreach ($listLicence as $licence) {
            if ($licence->getNumero() == $numero) {
                return $licence;
            }
        }
    }
    
    public function ajouterLicence($annee, $nom, $prenom, $tel, $pratiquant, $club, $niveau, $categorie) {
        $sql = "insert into licence (numero, annee, nom, prenom, tel, idPratiquant, idClub, idNiveau, idCategorie) VALUES ('$annee', '$nom', '$prenom', '$tel', '$pratiquant', '$club', '$niveau', '$categorie')";
        $ajouterLicence = $this->_dbConnexion->reqUpdate($sql);
    }
}
?>