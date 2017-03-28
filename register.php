<?php
  $cookie_name=$_POST["fname"];
  $cookie_email=$_POST["email"];
  setcookie($cookie_name, $cookie_email,time()+(86400*30),"/");
 ?>
<html>
  <body>
    <?php
      if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
      } else {
          echo "Hi '" . $cookie_name . "'<br>";
          echo "You recently signed up with the email address: " . $_COOKIE[$cookie_name] . " thank you";
      }
    ?>
  </body>
</html>