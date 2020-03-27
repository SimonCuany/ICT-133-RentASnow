<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 16.01.2020
 * Time   : 11:09
 */


ob_start();
?>
<h1 align="center"> Connexion</h1>
    <form action="index.php?action=TryLogin" method="post">
        <div align="center" class="form-group">
            <label for="idname">Name:</label>
        <input name="Name" class="form-control" id="idname">
        <br>
            <label for="idpass">Password:</label>
            <input name="password" type="password" class="form-control" id="idpass"> <br>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>


    </form>


<?php
$content = ob_get_clean();
require "view/gabarit.php"
?>