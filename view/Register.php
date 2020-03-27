<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 16.01.2020
 * Time   : 11:09
 */


ob_start();
?>




    <h1 align="center">Inscription</h1>
    <form action="index.php?action=TryRegister" method="post">
        <div  align="center" class="form-group">
            <label for="idnamer">Name:</label>
        <input name="Namer" class="form-control" placeholder="Name">
        <br>
            <label for="idpassword">Password:</label>
            <input type="password" class="form-control" id="idpassword" placeholder="Password"><br>

            <label for="confirm_password">Confirm password:</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password"><br>
        <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>


<?php
$content = ob_get_clean();
require "view/gabarit.php"
?>