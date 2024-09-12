<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //grab dta
    $userSearch = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username=:usersearch;";

        $statement = $pdo -> prepare($query);

        $statement -> bindParam(":usersearch",$userSearch);
        $statement -> execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $statement = null;

    } catch (PDOException $e) {
        die("Query failed : ". $e->getMessage());
    }

}else{
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>CRUD-READ</title>
</head>
<body>
    <h3>Search Results:</h3>
<?php
if(empty($results)){
    echo "<p>No results found!</p>";
}else{
    echo "<pre>";
    print_r($results);
    echo "</pre>";
}
?>
</body>
</html>
