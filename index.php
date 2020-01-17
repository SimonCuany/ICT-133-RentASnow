<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 09.01.2020
 * Time   : 11:47
 */
session_start();
$action = $_GET['action'];


require "controler/controler.php";


switch ($action) {
    case 'home':
        home();
        break;
    case 'listSnows':
        snowboard();
        break;
    case 'Login':
        login();
        break;
    default :
        home();
        require_once 'view/home.php';
        break;
}

?>
