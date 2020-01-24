<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 16.01.2020
 * Time   : 11:09
 */


ob_start();




    $product["id"] = $_GET["product"];

    foreach ($snows as $snow) {
    if ($snow["id"] == $product["id"]) {
    $product = [

    "name" => $snow["name"],
    "marque" => $snow["marque"],
    "Type" => $snow["Type"],
    "Brand" => $snow["Brand"],
    "image" => $snow["image"],
    "bigimage" => $snow["bigimage"],
    "description" => $snow["description"],
    "dateretour" => $snow["dateretour"],
    "disponible" => $snow["disponible"]
    ];
    }


    }

ob_start();
?>
    <h1 style="text-align: center">Products</h1>
    <br>

    <div>
        <div class="container text-center">
            <h1 class="display-4 "><?= $product['name'] ?> </h1>
            <img src="view/images/<?= $product['bigimage'] ?> " class="ditalissnow">

        </div>
    </div>

    <table class="table">
        <thead>
        <tr>

            <th class="text-center">Description</th>
            <th class="text-center">Type</th>
            <th class="text-center">Date de retour</th>


        </tr>
        </thead>
        <tbody>

        <tr>
            <td class="text-center"> <?= $product['description'] ?></td>
            <td class="text-center"><?= $product['Type'] ?></td>
            <?php if($product['disponible'] == false){
                echo '<td class="text-center">'.date("d.m.Y", strtotime($product['dateretour']))."</td>";
            } else{

                echo '<td class="text-center"> à definir </td>';
            }
            ?>
        </tr>
        <tr>

        </tr>

        </tbody>
    </table>
    <button type="button" class="btn btn-outline-dark"><a href="index.php?action=listSnows" >Retour</button>

<?php
$content = ob_get_clean();
require "view/gabarit.php"
?>