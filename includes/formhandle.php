<?php
    $firstnum = $_POST("firstnumber");
    $secondnum = $_POST("secondnumber");
    $operation = $_POST("operator");
    $result = 0;

    switch($operation){
      case "add":
        $result = $firstnum + $secondnum;
      case "subtract":
        $result = $firstnum - $secondnum;
      case "multiply":
        $result = $firstnum * $secondnum;
      case "divide":
        $result = $firstnum / $secondnum;

    }
    echo "$operation of $firstnum and $secondnum is \n $result";

