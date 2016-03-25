<?php
 session_start();
  if(isset($_SESSION['userID']))
 {
  header("Location: profile.php");     
 }

?>
  <?php
   $server = "localhost";
   $username= "micky";
   $password ="DATA";
   $db = "HTY";
   
   $conn = new mysqli($server,$username,$password,$db);
 
   if($conn->connect_error)
   {
    die("connection failed: " . $conn->connect_error);
   }
   else
   {
    $sql = "SELECT pwd FROM MEMBER WHERE email ='".$_POST['id']."'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)> 0)
    {
     while($row = mysqli_fetch_assoc($result))
     {  
      $pwd = $row["pwd"];
      $enterpwd = md5($_POST['pwd']);
      $password = md5("password");
#      echo "1 ". $pwd;
#      echo "</br>2 ". $enterpwd;
#      echo "</br>3 ". $password;
      if($pwd == $enterpwd && $enterpwd != $password)
      {
       $_SESSION["userID"] = $_POST['id'];
       header("Location: profile.php");
      }
      elseif($pwd == $enterpwd && $enterpwd == $password)
      {
      ?>
       <div id="newpwd">
	<form action="changePwd.php" method="POST">
	<?php
	echo"<input type='hidden' name='email' value ='".$_POST['id']."'>";
	echo"<input type='hidden' name='p' value='".$_POST['pwd']."'>";
	?>
	Old Password   <input type="password" name="orig"></br>
	New Password <input type="password" name="new1"></br>
        New Password <input type="password" name="new2"></br>
        <input type="submit" value="Submit">
	</form>
       </div>
      <?php
      }
      else
      {
       echo"</br>Wrong information, please return and try again";
      } 
     }
     	
    }
     else
      {
       echo"</br>Wrong information, please return and try again";
      }
   }
   ?>
  </body>
</html>

