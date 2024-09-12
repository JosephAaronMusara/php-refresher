<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //grab dta
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "UPDATE users SET username=:username, pwd=:pwd, email=:email WHERE id = 3;";

        $statement = $pdo -> prepare($query);

        $statement -> bindParam(":username",$username);
        $statement -> bindParam(":pwd",$pwd);
        $statement -> bindParam(":email",$email);
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