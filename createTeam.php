<?php
 session_start();
 $server = "localhost";
 $username= "micky";
 $password ="DATA";
 $db = "HTY";
 
 if($_POST['Pass1'] != $_POST['Pass2'] || !isset($_POST['Title']) || !isset($_POST['Description']))
 {
  header("Location: profile.php");
 }
 $conn = new mysqli($server,$username,$password,$db);
 if($conn->connect_error)
 {
  die("connection failed: " . $conn->connect_error);
 }
 else
 {
  $newpass = md5($_POST['Pass1']);
  $sql = "INSERT INTO HTYTEAM (Title,Description,pwd) VALUES ('".$_POST['Title']."','".$_POST['Description']."','".$newpass."')";
  
  mysqli_query($conn,$sql);
  $sql = "SELECT TEAMID FROM HTYTEAM WHERE Title ='".$_POST['Title']."'";
  echo$sql;
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)> 0)
  {
   while($row = mysqli_fetch_assoc($result))
   {
    $id = $row['TEAMID'];
   }
  } 
  $sql = "UPDATE MEMBER SET NEWTEAMID =".$id." WHERE email ='".$_SESSION['userID']."'";
  mysqli_query($conn,$sql);
  $sql = "UPDATE MEMBER SET InTeam = 1 WHERE email ='".$_SESSION['userID']."'";
  mysqli_query($conn,$sql);

  echo"<script>window.location.replace('http://hacktheyard.com/teams.php');</script>";
 }
?>
