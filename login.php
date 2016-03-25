<?php
 session_start();
 if(isset($_SESSION['userID']))
 {
  header("Location: profile.php");     
 }
?>
<html>
    <head>
        <title>
            Login
        </title>
        <link href="login.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <?php
     if(isset($_COOKIE['wrong']))
     {
      echo"<script>alert('ERROR: Password Entry Incorrect');</script>";
     }

    ?>
    
        <div id="login_box">
            <form action="pass_check.php" method="POST">
              Email<input type="text" name="id"></br>
              Password<input type="password" name="pwd"></br>
              <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>

