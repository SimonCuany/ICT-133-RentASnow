<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 09.01.2020
 * Time   : 11:47
 */
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'C:\xampp\ICT133\ICT-133\ICT-133-RentASnow\view\home.php';
}
function snowboard()
{
    $listSnows = getsnowboard();
    require_once 'C:\xampp\ICT133\ICT-133\ICT-133-RentASnow\view\snowboard.php';
}
function login()
{
    require_once 'C:\xampp\ICT133\ICT-133\ICT-133-RentASnow\view\Login.php';
}
?>
