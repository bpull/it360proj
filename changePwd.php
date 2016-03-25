<?php
session_start();
?>
<?php
 if($_POST['p'] != $_POST['orig'] || $_POST['new1'] != $_POST['new2'])
 {
  setcookie("wrong","true",time()+5);
  header("Location: login.php");
 }
 else
 {
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
   $newpass = md5($_POST['new1']);
   $sql = "UPDATE MEMBER SET pwd = '".$newpass."' WHERE email = '".$_POST['email']."'";
   mysqli_query($conn,$sql); 
   $_SESSION["userID"] = $_POST['email'];
   header("Location: profile.php");
  }
 }
?>
