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
        echo "CLUB : " . $club->getNom() . "<br />";
        echo "Date d'édition : " . date("d") . "/" . date("m") . "/" . date("Y") . "<br />";
        $lesLicences = $club->getLicences();
        foreach ($lesLicences as $uneLicence) {
            echo $uneLicence->getDescription() . "<br />";
        }
        ?>
        <a href="index.php"> Retour aux clubs</a> 
    </body>
</html>
