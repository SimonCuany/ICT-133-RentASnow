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

function Details()
{
    require_once 'view/SnowDetails.php';
}

function TryLogin()
{

    if ($_POST["Name"] == "" && $_POST["password"] == "") {
        login();
        return;
    } else {
        $Users = getUser();
        foreach ($Users as $user) {
            if ($_POST["Name"] == $user["Name"]) {
                if ($_POST["password"] == $user["password"]) {
                    $_SESSION["Name"] = $user["Name"];
                    $_SESSION["password"] = $user["password"];

                }
            }

        }
        home();
    }

}


function disconnect()
{
    session_unset();
    home();
}

function register()
{
    require_once 'view/register.php';
}

function tryregister()
{
    $listuser = getUser();

    $lastid = 0;
    foreach ($listuser as $users) {
        $id = $users["id"];
        if ($id > $lastid) {
            $lastid = $id;
        }
    }
    $lastid++;
    $listuser[] = ["id" => $lastid, "Name" => $_POST["Namer"], "password" => $_POST["passwordr"]];
    createuser($listuser);
    home();
}


?>



