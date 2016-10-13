<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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
