<?php
//var_dump($db->requete("Select * from livre"));
foreach ($licences as $uneLicence):
    ?>
    <div>
        <div>
            <h4><ins><?= $uneLicence->getDescription(); ?></ins></h4> 
        </div>
    </div>
<?php endforeach; ?>

<?php
/*
echo "CLUB : " . $club->getNom() . "<br />";
echo "Date d'édition : " . date("d") . "/" . date("m") . "/" . date("Y") . "<br />";
$lesLicences = $club->getLicences();
foreach ($lesLicences as $uneLicence) {
    echo $uneLicence->getDescription() . "<br />";
}
 **/
?>

<div class="jumbotron">
    <form action="ajouterLicence.php">
        Année:<br>
        <input type="text" name="annee">
        <br>
        Nom:<br>
        <input type="text" name="nom">
        <br>
        Prenom:<br>
        <input type="text" name="prenom">
        <br>
        Téléphone:<br>
        <input type="text" name="tel">
        <br>
        Pratiquant :<br>
        <SELECT name="pratiquant" size="1">
            <?php
            foreach ($pratiquants as $unPratiquant):
                echo '<OPTION>' .$unPratiquant->getId() ." - " .$unPratiquant->getDescription() . '</OPTION>';
            endforeach;
            ?>
        </SELECT>
        <br>
        Club :<br>
        <SELECT name="club" size="1">
            <?php
            foreach ($clubs as $unClub):
                echo '<OPTION>' .$unClub->getId() ." - " .$unClub->getNom() . '</OPTION>';
            endforeach;
            ?>
        </SELECT>
        <br>
        Niveau:<br>
        <SELECT name="niveau" size="1">
            <?php
            foreach ($niveaux as $unNiveau):
                echo '<OPTION>' . $unNiveau ->getId() ." - " .$unNiveau->getDescription() . '</OPTION>';
            endforeach;
            ?>
        </SELECT>
        <br>
        Categorie :<br>
        <SELECT name="categorie" size="1">
            <?php
            foreach ($categories as $unCategorie):
                echo '<OPTION>' .$unCategorie->getId() ." - "  .$unCategorie->getDescription() ." de " .$unCategorie->getAgeMin() ." à " .$unCategorie->getAgeMax() ." ans ". '</OPTION>';
            endforeach;
            ?>
        </SELECT>
        <br><br>
        <input type="submit" value="Ajouter">
    </form>
</div>
<a href="index.php"> Retour aux clubs</a> 
</body>
</html>
