<!DOCTYPE html>
<html>
  <head>
    <title>Register Page</title>
  </head>
  <body>
    <?php
      setcookie("name",$_POST["fname"],time()+(86400*30),"/");
      setcookie("email",$_POST["email"],time()+(86400*30),"/");
    ?>
  </body>
</html>
