<?php
 session_start();
 if(!isset($_SESSION['userID']))
 {
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
  $sql = "SELECT FirstName, LastName FROM MEMBER WHERE email = '".$_SESSION['userID']."'";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)> 0)
  {
   while($row = mysqli_fetch_assoc($result))
   {
    $first = $row['FirstName'];
    $last = $row['LastName'];
    
   }
  }
 }
?>
<html>
 <head>
  <link href="./profile.css" media="all" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <script type="text/javascript">
   function logout()
   {
    window.location.replace("http://hacktheyard.com/logout.php");
   }
   function showUp()
   {
    $('#newPic').show();
   }
   function hideUp()
   {
    $('#newPic').hide();
   }
   function showForm()
   {
    $('#smoke').show();
   }
   function hideSmoke()
   {
    $('#smoke').hide();
   }
  </script>
 </head>
 <body>
  <div id="header">
   <img src="/img/sun.jpg" height="225px" width="100%">
  </div>
  <div id="nav" style="color:white;">
  <p><a href="teams.php"><span id="links">Teams</span></a>
   <a href="people.php"><span id="links">People</span></a>
   <a href="profile.php"><span id="links">Profile</span></a>
   <a href="logout.php"><span id="links">Logout</span></a></p> 
  </div>
  <div id="under">
  </div>
  <div id="underunder"> 
 <?php
    $sql = "SELECT NEWTEAMID FROM MEMBER WHERE email = '".$_SESSION['userID']."'";
    $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_assoc($result);
      $targetfile="./teamPics/".$row['NEWTEAMID'].".jpg";
      if (file_exists($targetfile))
      {
       $page .= "<img src='";
       $page .= $targetfile;
       $page .= "' height='200px' width='300px'>";
      }
      else
      {
       $page = "<img src='./profilePictures/pvsnp.jpg' height='200px' width='300px'>";
      }
      echo"<div id='individual'>";

      if($row['NEWTEAMID'] != 0){
      echo"<a href='profileView.php?n=".$row['NEWTEAMID']."'> ".$page ."</a>";
      
      
      $sql = "SELECT Title,Description,TEAMID FROM HTYTEAM WHERE TEAMID='".$row['NEWTEAMID']."'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);

      $Title = $row['Title'];
      $Description = $row['Description'];
      echo $Title . "</br>" . $Description;
      }
      else
        echo "Not in a team yet!";
      echo"</div>";
      $page = "";
  ?> 
  </div>
 <div> 
 <div id="imghold">
  <?php
  $target_file = "./profilePictures/";
  $target_file .= $_SESSION['userID'];
  $target_file .= ".jpg";
  if (file_exists($target_file)) {
   echo"<img id='garcia' src='/profilePictures/";
   echo $_SESSION['userID'];
   echo".jpg' height='150px' width='150px' align='middle' onmouseover='showUp()' onclick='showForm()'>"; 
  }
  else
  {
   echo"<img id='garcia' src='img/garcia.jpg' height='150px' width='150px' align='middle' onmouseover='showUp()'>";
  }
  ?>
  </div>
  <div id="personal"> 
  <?php
  $sql = "SELECT Major, Age, email, interestingFact FROM MEMBER WHERE email = '".$_SESSION['userID']."'";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)> 0)
  {
   while($row = mysqli_fetch_assoc($result))
   {
    $major = $row['Major'];
    $age = $row['Age'];
    $email = $row['email'];
    $fact = $row['interestingFact'];
   }
  }

  $page= "Major: " .$major."</br></br>";
  $page.="Age: ".$age."</br></br>";
  $page.="Email: ".$email."</br></br>";
  $page .="Interesting Fact: ".$fact;
  echo $page;
?>  
  </div>
</div>
  <div id="name">
   <?php
    echo"<h1>".$first." ".$last."</h1>";
   ?>
  </div>
  <div id="newPic" onclick='showForm()' onmouseout="hideUp()" >
  </br></br></br>
   Upload New Pic
  </div>
  <div id="smoke">
  <div id="newPP">
   <form action="upload.php" method="post" enctype="multipart/form-data">
   </br></br></br></br> Select image to upload</br></br>
    <input type="file" name="fileToUpload" id="fileToUpload"></br></br>
    <input type="submit" value="Upload Image" name="submit">
    <input type="button" value="Cancel" onclick="hideSmoke()">
   </form>
  </div>
  </div>
 </body>
</html>

