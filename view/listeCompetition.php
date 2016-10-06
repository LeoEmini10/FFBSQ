<div class="top">
    <input type="text" id="recherche">
    <button id="rech" type="button"> Rechercher Club</button>

    <?php
    //var_dump($db->requete("Select * from livre"));
    foreach ($competitions as $competition):
        ?>
        <div>
            <div>
                <h4><ins><?= $competition->getDescription(); ?></ins></h4> 
                <a href="index.php?action=licences&club=<?= $competition->getId(); ?>"> Competitions </a> 
            </div>
        </div>
    <?php endforeach; ?>
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
