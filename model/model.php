<?php
/**
 * Title  : ICT-133
 * User   : simon.cuany
 * Date   : 09.01.2020
 * Time   : 11:47
 */
function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}

function getsnowboard()
{
    return json_decode(file_get_contents("model/dataStorage/Snows.json"), true);
}

?>
