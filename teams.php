<?php
 session_start();
 if(!isset($_SESSION['userID']))
 {
  header("Location: index.php");
 }
?>

<html>
 <head>
  <title>
   Teams
  </title>
  <link href="./css/teams.css" media="all" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <script>
  function showBox()
  { 
   $("#smoke").show();
  }
  function hideCreate()
  {
   $("#smoke").hide();
  }
  </script>
 </head>
 <body>
  <div id="nav">
   <p><a href="teams.php"><span id="links">Teams</span></a>
   <a href="people.php"><span id="links">People</span></a>
   <a href="profile.php"><span id="links">Profile</span></a>
   <a href="logout.php"><span id="links">Logout</span></a></p>
  </div>
  <?php
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
    $sql = "SELECT InTeam FROM MEMBER WHERE email = '".$_SESSION['userID']."'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)> 0)
    {
     while($row = mysqli_fetch_assoc($result))
     {
      $first = $row['InTeam'];
     }

    }
     if($first != '1')
     {
      echo"<input id='createButton' type='button' value='Create Team' onclick='showBox()'>";
     }
    $sql = "SELECT Title,Description,TEAMID FROM HTYTEAM";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)> 0)
    {
     echo"<div id='teams'>";
     while($row = mysqli_fetch_assoc($result))
     {
      $targetfile="./teamPics/".$row['TEAMID'].".jpg";
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
      echo"<a href='profileView.php?n=".$row['TEAMID']."'> ".$page ."</a>";
      $Title = $row['Title'];
      $Description = $row['Description'];
      echo $Title . "</br>" . $Description;
      echo"</div>";
      $page = "";
     }
     echo"</div>";
    }  
   }
  ?>
 <div id="smoke">
  <div id="createBox">
   <form action="createTeam.php" method="POST">
    <h2>Please Enter a Brief Description About the Team</h2>
    <span style="text-align:right;float:right;padding-right:30px";>
    Title<input type="text" name="Title"></br>
    Brief Description<input type="text" name="Description"></br>
    Password<input type="password" name="Pass1"></br>
    Re-type Password<input type="password" name="Pass2"></br>
    <input type="submit" value="Submit">
    <input type="button" value="Cancel" onclick="hideCreate()"></br>
    </span>
   </form>
  </div>
 </div>
 </body>

</html>
