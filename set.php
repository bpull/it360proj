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
 if($_POST['n'] == 1)
 {
  $theThing ="Motivation";
 }
 if($_POST['n'] == 2)
 {
  $theThing ="FinishedDescription";
 }
 if($_POST['n'] == 3)
 {
  $theThing ="NextStep";
 }
 if($_POST['n'] == 4)
 {
  $theThing ="Challenges";
 }


 $sql = "UPDATE HTYTEAM SET ".$theThing." ='".$_POST['toChange']."' where TEAMID = ".$_POST['teamID'];

 $result = mysqli_query($conn,$sql);
 echo"<script>window.location.replace('profileView.php?n=".$_POST['teamID']."');</script>";


?>
