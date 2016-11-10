
<div class="top">
    <input type="text" id="recherche">
    <button id="rech" type="button"> Rechercher Club</button>

    <?php
    //var_dump($db->requete("Select * from livre"));
    foreach ($clubs as $club):
        ?>
        <div>
            <div>
                <h4><ins><?= $club->getNom(); ?></ins></h4> 
                <small><p><?= $club->getAdresse(); ?></p></small>  
                <a href="index.php?action=licences&club=<?= $club->getId(); ?>"> Licences du club </a> 
            </div>
        </div>
    <?php endforeach; ?>
</div>

<form action="action_page.php">
    nom du club:<br>
    <input type="text" name="nom" value="">
    <br>
    addresse:<br>
    <input type="text" name="addresse" value="">
    <br>
    mail<br>
    <input type="mail" name="mail" value="">
    <br>
    centre de bowling :<br>
    <SELECT name="centreDeBowling" size="1">
        <?php
        foreach ($centresDeBowling as $unCentreDeBowling):
            echo '<OPTION>' .$unCentreDeBowling->getId() ." - " .$unCentreDeBowling->getNom() . '</OPTION>';
        endforeach;
        ?>
    </SELECT>
    <br><br>
    <input type="submit" value="Submit">
</form> 


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
