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
  <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    <input type="number" name="firstnumber" id="firstnumber" placeholder="First Number......"><br/>
    <select name="operator" id="operator">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <br>
    <input type="number" name="secondnumber" id="secondnumber" placeholder="Second Number......"><br/>
    <button>Calculate</button>
  </div>
    </form>
    <?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstnum = filter_input(INPUT_POST,"firstnumber",FILTER_SANITIZE_NUMBER_FLOAT);
    $secondnum =filter_input(INPUT_POST,"secondnumber",FILTER_SANITIZE_NUMBER_FLOAT);
    $operation = htmlspecialchars($_POST["operator"]);
    $result = 0;

    //Erro handling
    $errors = false;
    if(empty($firstnum) || empty($secondnum) || empty($operation)){
      echo "<p class='error-msgs'>Fill in all fields!</p>";
      $errors=true;
    }

    if(!is_numeric($firstnum) || !is_numeric($secondnum))
    {
      echo "<p class='error-msgs'>Values MUST be numeric!</p>";
      $errors=true;
    }

  if(!$errors){
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
    echo "<p class='error-msgs'>Something went wrong!</p>";
    }

    echo "<p class='calc-result'>[Operation] ==> $operation<br> [Numbers] ==> $firstnum and $secondnum <br>[Result] ==> $result </p>";
  }
   }
?>

</body>
</html>