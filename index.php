<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>CRUD-Create</title>
</head>
<body>
  <div class="signup-container">
    <h3>Sign Up</h3>
    <form action="includes/createuser.inc.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <input type="email" name="email" placeholder="E-mail">
      <button>Sign Up</button>
    </form>
  </div>
  <div class="signup-container">
    <h3>Change User</h3>
    <form action="includes/userupdate.inc.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <input type="email" name="email" placeholder="E-mail">
      <button>Update</button>
    </form>
  </div>
  <div class="signup-container">
    <h3>Delete User</h3>
    <form action="includes/userdelete.inc.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <button>Delete</button>
    </form>
  </div>
</body>
</html>
