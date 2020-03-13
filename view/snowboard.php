<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 09.01.2020
 * Time   : 11:47
 */

ob_start();
?>
<br><h1>Liste des snowboards</h1>
<?php foreach ($Snows as $onesnow) { ?>
    <table class="table table-bordered">
        <th>Marque</th>
        <th>Modèle</th>
        <th>Date de retour</th>
        <th>Disponible</th>

        <tbody>

        <tr>
            <td>
                <?= $onesnow['marque'] ?>
            </td>
            <td>
                <?= $onesnow['modele'] ?>
            </td>

            <td>
                <?= $onesnow['dateretour'];
                if ($onesnow['dateretour'] == "") {
                    echo "A définir";
                }
                ?>
            </td>
            <td>
                <?php if ($onesnow['disponible'] == false) {
                    echo "Non";
                } else {
                    echo "Oui";
                }
                ?>

            </td>
            <td>
                <img src="<?= $onesnow['bigimage'] ?>" style="width: 150px ">
            </td>
            <td>
                <button type="button"><a href="index.php?action=DetailsSnow<?= $Snows['id'] ?>">Détails</button>
            </td>

        </tr>
        </tbody>
    </table>


    <?php

} ?>

<?php
$content = ob_get_clean();
require "view/gabarit.php"
?>

