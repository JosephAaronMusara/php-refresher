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
    <!-- <?php echo $_SERVER["PHP_SELF"]?> -->
  <form action="includes/formhandle.php" method="post">
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
</body>
</html>