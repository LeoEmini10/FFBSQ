<h2>Les compétitions existantes:</h2>
<br>
<?php
//var_dump($db->requete("Select * from livre"));
foreach ($competitions as $uneCompetition):
    ?>
    <div>
        <div>
            <h4><ins><?= $uneCompetition->getDescription(); ?></ins></h4> 
        </div>
    </div>
<?php endforeach; ?>
</div>
<?php var_dump($_POST["centreDeBowling"]); ?>
<div class="jumbotron">
    <form action="competition.php?action=ajouterCompetition" method="post">
        Dénomination:<br>
        <input type="text" name="denomination"/>
        <br>
        Date:<br>
        <input type="date" name="date"/>
        <br>
        Club :<br>
        <SELECT name="club" size="1">
            <?php
            foreach ($clubs as $unClub):
               echo '<OPTION>' .$unClub->getId() . " - " .$unClub->getNom() . '</OPTION>';
            endforeach;
            ?>
        </SELECT>
        <br>
        Centre De Bowling :<br>
        <SELECT name="centreDeBowling" size="1">
            <?php
            foreach ($centresDeBowling as $unCentreDeBowling):
               echo '<OPTION>' .$unCentreDeBowling->getId() ." - " .$unCentreDeBowling->getNom(). '</OPTION>';
            endforeach;
             ?>
        </SELECT>
        <br>
        Catégorie :<br>
        <SELECT name="centreDeBowling" size="1">
            <?php
            foreach ($categories as $uneCategorie):
               echo '<OPTION>' .$uneCategorie->getId() ." - " .$uneCategorie->getDescription() ." de " .$uneCategorie->getAgeMin(). " à " .$uneCategorie->getAgeMax() ." ans" .'</OPTION>';
            endforeach;
             ?>
        </SELECT>
        <br><br>
        <input type="submit" value="Ajouter"/>
    </form>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#rech").click(function () {
            location.href = "index.php?action=rechercher&nom=" + $("#recherche").val();
        });
    });
</script>
</body>
</html>
