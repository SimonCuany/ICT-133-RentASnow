<?php
ob_start();
$title = "RentASnow - Accueil";
?>
<!-- ________ SLIDER_____________-->
<div class="row-fluid">
    <div class="camera_full_width">
        <div id="camera_wrap">
            <div data-src="view/images/slider/5.jpg">
                <div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à disposition.</div>
            </div>
            <div data-src="view/images/slider/1.jpg">
                <div class="camera_caption fadeFromBottom cap2">Découvrez des paysages fabuleux avec des sensations.
                </div>
            </div>
            <div data-src="view/images/slider/2.jpg"></div>
        </div>
        <br style="clear:both"/>
    </div>
</div>

<!-- ________ NEWS _____________-->
<div class="span12"><br>
    <h1>Les news </h1>
    <?php foreach ($news as $onepieceofnews) { ?>

        <h4><?= $onepieceofnews['title'] ?></h4>
        <h5><?= $onepieceofnews['firstname'] ?></h5>
        <?= $onepieceofnews['text'] ?><br>
        <?= date('d.M.Y', strtotime($onepieceofnews['date'])) ?>

    <?php } ?>

</div>


<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
