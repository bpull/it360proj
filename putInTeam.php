<?php
 session_start();

 $server = "localhost";
 $username= "micky";
 $password ="DATA";
 $db = "HTY";

 $conn = new mysqli($server,$username,$password,$db);
 if($conn->connect_error)
 {
  die("connection failed: " . $conn->connect_error);
 }

  $sql = "UPDATE MEMBER SET NEWTEAMID =".$_POST['n']." WHERE email ='".$_SESSION['userID']."'";


  mysqli_query($conn,$sql);
  $sql = "UPDATE MEMBER SET InTeam = 1 WHERE email ='".$_SESSION['userID']."'";
  mysqli_query($conn,$sql);
  echo"<script>window.location.replace('profileView.php?n=".$_POST['n']."');</script>";
?>
