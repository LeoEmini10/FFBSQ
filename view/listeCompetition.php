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
<div class="jumbotron">
    <form action="ajouterCompetition.php">
        Dénomination:<br>
        <input type="text" name="denomination">
        <br>
        Date:<br>
        <input type="date" name="date">
        <br>
        Club :<br>
        <input type="">
        <br><br>
        <input type="submit" value="Envoyer">
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
