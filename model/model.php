<?php
/**
 * Model RentASnow
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

//$cmd="mysql -u $user -p$pass ";
function getPDO()
{
    require ".const.php";
    $res = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $res;
}
function getNews()
{
    //return json_decode(file_get_contents("model/dataStorage/news.json"),true);
    return getNewsDB();
}


function getUsers()
{
    return getUsersDB();
    //return json_decode(file_get_contents("model/dataStorage/users.json"),true);
}
function putUsers($tab)
{

    file_put_contents('model/dataStorage/users.json', json_encode($tab));
}
function getUsersDB()
{

    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM users';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}//get Users from the snows Database
function getSnows($id)
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM snows
                  WHERE snowtype_id=:id';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(['id'=>$id]);//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}//get Snows with snowstypes
function getSnowtypes()
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM snowtypes';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
function getSnowtype($id)
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM snowtypes
                    where id=:id';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(['id'=> $id]);//execute query
        $queryResult = $statement->fetch();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}//get Snows with snowstypes



function update($password,$id){

    try {
        $dbh = getPDO();
        $query = 'UPDATE users
                  SET password=:password
                  WHERE users.id=:id';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(array(':password' => $password, ':id' => $id));//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }

}
function updatePassword(){
    $users = getUsers();
    foreach ($users as $user)
    {
        $hash = password_hash($user['firstname'],PASSWORD_DEFAULT);
        // echo $user['firstname']." => $hash \n";
        // TODO Ecrire le code pour mettre à jour le mot de passe dans la base de données avec $hash
        update($hash,$user['id']);
    }

}
function getNewsDB()
{

    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM news 
                  INNER join users 
                  on news.user_id = users.id';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
?>
