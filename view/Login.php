<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 16.01.2020
 * Time   : 11:09
 */


ob_start();
?>
    <!-- Button to open the modal login form -->


    <!-- The Modal -->

<?php
$content = ob_get_clean();
require "view/gabarit.php"
?>