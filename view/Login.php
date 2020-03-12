<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 16.01.2020
 * Time   : 11:09
 */


ob_start();
?>

    <form action="index.php?action=TryLogin" method="post">
        Name :
        <input name="Name">
        <br>
        Password : <input name="password" type="password">
        <button type="submit">Login</button>
    </form>
<?php
$content = ob_get_clean();

?>