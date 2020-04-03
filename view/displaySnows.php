<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

ob_start();
$title = "RentASnow - Snows";
?>
<br><br><br><br><br><br><br>
<?php foreach ($snowtypes as $onepieceofsnow) {?>
    <?php if ($onepieceofsnow['id']==1){echo "<h1>Nos Snowboards :</h1>";} ?>
    <a href="index.php?action=displaySnowsPlus&id=<?= $onepieceofsnow['id']?>" class="link">
        <div class="center case_snow">
            <img src="view/images/Snows/<?= $onepieceofsnow['photo'] ?>"  alt="" class="DSimg">
            <h2>Marque : <?= $onepieceofsnow['brand'] ?></h2>
            <h2>Model : <?= $onepieceofsnow['model'] ?></h2>
        </div>
    </a>
    <hr>
<?php } ?>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
