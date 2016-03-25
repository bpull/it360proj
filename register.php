<?php
session_start();
if(isset($_SESSION['userID']))
{
 header("Location: profile.php");
}
if(!isset($_POST['Email']))
{
 setcookie("wrong","pass",time()+5);
 header("Location: index.php");
}
if($_POST['First'] =="" || $_POST['Last'] =="" || $_POST['Email']=="" || $_POST['Pass']=="")
{
 setcookie("wrong","blank",time()+5);
 header("Location: index.php");
} 
if($_POST['Pass'] != $_POST['Pass2'])
{
 setcookie("wrong","pass",time()+5);
 header("Location: index.php");
}

 $server = "localhost";
 $username= "micky";
 $password ="DATA";
 $db = "HTY";
 $conn = new mysqli($server,$username,$password,$db);

 $conn = new mysqli($server,$username,$password,$db);
 if($conn->connect_error)
 {
  die("connection failed: " . $conn->connect_error);
 }
 else
 {
  $sql = "SELECT email FROM MEMBER WHERE email = '".$_POST['Email']."'";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)> 0 && $_POST['email'] =="")
  {
   setcookie("wrong","have",time()+5);
   header("Location: index.php");
  }
  else
  {
   if($_POST['Major']=="")
   {
    $_POST['Major'] = "N/A";
   }
   if($_POST['Age']=="")
   {
    $_POST['Age'] = 99;
   }
   if($_POST['Phone']=="")
   {
    $_POST['Phone'] = 8675309;
   }
   if($_POST['Fact']=="")
   {
    $_POST['Fact'] = "N/A";
   }
   if(strlen($_POST['Email'])>2)
   {
    $pwddd = md5($_POST['Pass']);
    $newsql = "INSERT INTO MEMBER (FirstName,LastName,Major,Age,email,phone,interestingFact,pwd) VALUES (";
    $newsql .= "'".$_POST['First']."','".$_POST['Last']."','".$_POST['Major']."',".$_POST['Age'].",'".$_POST['Email']."',".$_POST['Phone'].",'".$_POST['Fact']."','".$pwddd."')";
    mysqli_query($conn,$newsql);
   }
   echo"<script>window.location.replace('http://hacktheyard.com');</script>";
  }
 }


 
?>
