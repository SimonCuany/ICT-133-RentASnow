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
    <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <div align="center">
        <form class="modal-content animate" action="/action_page.php">
            <div class="imgcontainer" align="center" style="padding: 10mm">
                <img src="view/images/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label> <br>
                <input type="text" placeholder="Enter Username" name="uname" required><br>

                <br><label for="psw"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="psw" required><br><br>

                <button type="submit">Login</button>
                <br>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="padding: 5mm">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
        </div>
    </div>
<?php
$content = ob_get_clean();
require "view/gabarit.php"
?>