<?php
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'C:\xampp\ICT133\ICT-133\ICT-133-RentASnow\view\home.php';
}
function snowboard()
{
    $snowboard = getsnowboard();
    require_once 'C:\xampp\ICT133\ICT-133\ICT-133-RentASnow\view\snowboard.php';
}
?>
