<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 09.01.2020
 * Time   : 11:47
 */

ob_start();
?>
<h1>Liste des snowboards</h1>
<?php foreach ($Snows as $onesnow) { ?>
    <?= $onesnow['modele'] ?><br>
    <?= $onesnow['marque'] ?><br>

    <?php
}
$content = ob_get_clean();
require "view/gabarit.php"
?>

