<?php
/**
 * Title  : ICT-151
 * User   : simon.cuany
 * Date   : 12.03.2020
 * Time   : 15:29
 */


function getPDO()
{
    require ".constant.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;

}


function getNews()
{
    try {
        $dbh = getPDO();
        $query = "SELECT * FROM news INNER JOIN users ON news.user_id = users.id ;"; //initalise the Query variable and the commande to execute
        $statement = $dbh->prepare($query);//Prepare Query
        $statement->execute();
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC); //prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "\n";

    }
}

function getsnowboard()
{
    return json_decode(file_get_contents("model/dataStorage/Snows.json"), true);
}

function getUser()
{
    return json_decode(file_get_contents("model/dataStorage/User.json"), true);
}

function createuser($compte)
{
    file_put_contents('model/dataStorage/User.json', json_encode($compte));
}

?>
