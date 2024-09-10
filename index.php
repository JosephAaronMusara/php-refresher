<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="formdiv">
    <!--  -->
  <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    <label for="firstnumber">First number</label>
    <input type="text" name="firstnumber" id="firstnumber" placeholder="First Number........"><br/>
    <label for="secondnumber">Second Number</label>
    <input type="text" name="secondnumber" id="secondnumber" placeholder="Second Number.........."><br/>
  <label for="operator">Select the operation: </label>
    <select name="operator" id="operator">
      <option value="add">Add</option>
      <option value="subtract">Subtract</option>
      <option value="multiply">Multiply</option>
      <option value="divide">Divide</option>
    </select>
    <br>
    <input type="submit" value="Submit">
  </div>
    </form>
    <?php
    $firstnum = $_POST["firstnumber"];
    $secondnum = $_POST["secondnumber"];
    $operation = $_POST["operator"];
    $result = 0;

    switch($operation){
      case "add":
        $result = $firstnum + $secondnum;
        break;
      case "subtract":
        $result = $firstnum - $secondnum;
        break;
      case "multiply":
        $result = $firstnum * $secondnum;
        break;
      case "divide":
        $result = $firstnum / $secondnum;
        break;
    default:
        $result = "Invalid Operation";
    }
    if($result == "Invalid Operation"){
      echo "No operation to perform. Check your input well";
    }else{
      echo "[Operation] ==> $operation<br> [Numbers] ==> $firstnum and $secondnum <br>[Result] ==> $result";
    }
?>

</body>
</html>