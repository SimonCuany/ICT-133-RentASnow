<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 16.01.2020
 * Time   : 11:09
 */


ob_start();
?>
    <form action="index.php?action=TryRegister" method="post">
        Name :
        <input name="Namer">
        <br>
        Password : <input name="passwordr" type="password">
        <button type="submit">Register</button>
    </form>


<?php
$content = ob_get_clean();
require "view/gabarit.php"
?>