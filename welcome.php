<!DOCTYPE HTML>
<html lang="en">  
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="test2.css">
    <title>PHP Test 1</title>
    <link rel="stylesheet" href="css/stylec.css">
  </head>
  <body>
    <h1>Sign up for free grades!</h1>
      <?php
        if(!isset($_COOKIE["name"]))
        { 
      ?>
      <form action="register.php" method="post">
        <label for ="t1">First Name:</label>
        <input type="text" name="fname" id="t1"><br>
        <label for="t2">Last Name:</label>
        <input type="text" name="lname" id="t2"><br>
        <label for ="t3">Email:</label>
        <input type="text" name="email" id="t3"><br>
        <input type="submit">
      </form>
      <?php 
        }else{
          echo "HI, ".$_COOKIE["name"] . " ,you recently signed up with the email address: ". $_COOKIE["email"] . " ,thank you!";
        }
      ?>
  </body>
</html>

