<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $favColor = $_POST["favcolor"];

    if(empty($firstname) || empty($lastname)){
        if(empty($firstname)){
            echo "First name is required!";
            exit();
        }
        if(empty($lastname)){
            echo "Last name is required";
        }
    }else{
        echo "The name is $firstname $lastname.\nThey like $favColor";
    }

}else{
    header("Location : index.php");
}