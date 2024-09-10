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
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" placeholder="First Name........">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" placeholder="Last Name..........">

    <select name="favcolor" id="favcolor">
      <option value="No Color"></option>
      <option value="Blue">Blue</option>
      <option value="Red">Red</option>
      <option value="Pink">Pink</option>
    </select>
    <input type="submit" value="Submit">
  </div>
    </form>
    <?php echo $_SERVER["PHP_SELF"];?>
</body>
</html>