<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //grab dta
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username=:username AND pwd=:pwd;";

        $statement = $pdo -> prepare($query);

        $statement -> bindParam(":username",$username);
        $statement -> bindParam(":pwd",$pwd);
        $statement -> execute();

        $pdo = null;
        $statement = null;

        header("Location: ../index.php");

        die();

    } catch (PDOException $e) {
        die("Query failed : ". $e->getMessage());
    }

}else{
    header("Location: ../index.php");
}