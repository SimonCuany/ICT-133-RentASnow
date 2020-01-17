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
    require_once 'view/home.php';
}
function snowboard()
{
    $Snows = getsnowboard();
    require_once 'view/snowboard.php';
}
function login()
{
    require_once 'view/Login.php';
}
?>
