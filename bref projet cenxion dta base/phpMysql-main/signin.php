
<?php
  include_once('database.php');



?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Sign-in</title>
    <link rel="stylesheet" href="signin.css?v=<?php echo time(); ?>">
  </head>
  <body>
  <a href="signup.php"><input class="signupi" type="submit"  nam="insrc"  value="SIGN-UP"></a>

  <form action="signintrt.php" method="post">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="user" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="pswdee" placeholder="Password">
  </div>

  <input type="submit"  name="btn" class="btn" value="Sign in">
</div>
</form>
  </body>
</html>
