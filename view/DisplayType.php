<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

ob_start();
$title = "RentASnow - Snows";
var_dump($snowtype);
echo "<img src=\"view/images/Snows/". $snowtype['photo']."\" width=\"152px\" alt=\"\">";
 foreach ($snows as $onepieceofsnow) { ?>

        <div class="case_snow">
            <table border="1" class="center">
                <thead>
                <th>Code</th>
                <th>Longueur</th>
                <th>Etat</th>
                <th>Disponibilité</th>
                </thead>
                <tbody>
                <?php foreach ($snows as $snow) { ?>
                    <tr><a href="index.php?action=displaySnowsDetails&id=<?= $snow['id'] ?>">
                            <td>
                                <?= $snow['code'] ?>
                            </td>
                            <td>
                                <?= $snow['length'] ?>
                            </td>
                            <td>
                                <?= writestatesnow($snow['state']); ?>
                            </td>
                            <td>
                                <?= writeavaliblesnow($snow['avalible']); ?>
                            </td>
                        </a>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
<?php }
$content = ob_get_clean();
require "gabarit.php";
?>