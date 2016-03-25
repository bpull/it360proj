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
 $stack = array("");
 $stack2 = array("");
 $sql = "SELECT FirstName,LastName, NEWTEAMID,InTeam FROM MEMBER where email ='".$_SESSION['userID']."'";
 
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)> 0)
 {
  while($row = mysqli_fetch_assoc($result))
  {
   $id = $row['NEWTEAMID'];
   $inteam = $row['InTeam'];
  }
 }
  $sql = "SELECT FirstName,LastName FROM MEMBER where NEWTEAMID =".$_GET['n'];

 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)> 0)
 {
  while($row = mysqli_fetch_assoc($result))
  {
   array_push($stack,$row['FirstName']);
   array_push($stack2,$row['LastName']);
  }
 }

 $n = $_GET['n'];
 echo$n." n get ".$_GET['n'];
 $sql = "SElECT Title,Description,Motivation,FinishedDescription,NextStep,Challenges FROM HTYTEAM where TEAMID = ".$n;
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)> 0)
 {
  while($row = mysqli_fetch_assoc($result))
  {
   $Title = $row['Title'];
   $Description = $row['Description'];
   $Motivation= $row['Motivation'];
   $Finished= $row['FinishedDescription'];
   $Next= $row['NextStep'];
   $Challenges= $row['Challenges'];
  }
 }
 
?>
<html>
 <head>
  <link href="./profile.css" media="all" rel="stylesheet" type="text/css" />

  <link href="./css/teamProfile.css" media="all" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>
  function showSmoke()
  {
   $("#change").show();
  }
  function hideSmoke()
  {
   $("#change").hide();
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
   function hideForm()
   {
    $('#smoke').hide();
   }


  </script>
 </head>
 <body>
  <div id="nav" style="color:white;">
  <p><a href="teams.php"><span id="links">Teams</span></a>
   <a href="people.php"><span id="links">People</span></a>
   <a href="profile.php"><span id="links">Profile</span></a>
   <a href="logout.php"><span id="links">Logout</span></a></p>
  </div>
<?php
 echo"<div id='shortInfo'>";
 $target_file = "./teamPics/".$n.".jpg";
 if (file_exists($target_file)) {
 echo"<img id='profilePic' src='./teamPics/".$n.".jpg' height='200px' width='300px' onmouseover='showSmoke()'>";
 }
 else
 {
 echo"<img id='profilePic' src='./teamPics/robot.jpg' height='200px' width='300px' onmouseover='showSmoke()'>";
 }
 echo"</div>";
 
 if($id == $n)
 {
 ?>

 <div id="change" onclick='showForm()' onmouseout='hideSmoke()'>
 </br></br</br></br></br>
 <h2>Change Picture</h2>
 </div>

 <?php
}
 ?>
 <div id="shortD">

 <?php
 
  echo"<h3>";
  echo $Title;
  echo"</h3><h3>";
  echo$Description."</h3>";
  echo"<div id='lastThing'>";
  echo"<h3 style='margin-bottom:0px;'>Team Members</h3>";
  for($i = 1;$i< sizeof($stack);$i++)
  {
   echo $stack[$i] ." ".$stack2[$i]."</br>";
  } 
  echo"</div>";
  if($inteam !=1)
  {
  ?>
   <form action="putInTeam.php" method="POST">
   <input type="hidden" name="n" value="<?php echo$n; ?>">  
   </br><input type='Submit' value='Join Team'>
   </form>
  <?php
  }
 ?>
 </div>
 <div id="otherInfo">
 <div id="Moto" style="text-align:center;overflow-y: scroll;">
 <h2>Motivation For Project?</h2></br></br>
 <?php
  echo$Motivation;
  if($id == $n)
  {
   echo"<input type='button' value='Edit' id='editButton' onclick=\"location.href='/editTeam.php?n=1'\">";
  }
 ?>
 </div>
 <div id='Finished' style="text-align:center;overflow-y:scroll;">
 <h2 style="margin-bottom:0;">Description Of Project</h2>
 <h2 style="margin-top:0;">As it Stands Now!</h2></br></br>
 <?php
  echo $Finished;
  if($id == $n)
  {
   echo"<input type='button' value='Edit' id='editButton' onclick=\"location.href='/editTeam.php?n=2'\">";
  }
 ?>
 
 </div>
 <div id='Next' style="text-align:center;overflow-y:scroll;">
 <h2>What's Next For Your Project?</h2></br></br>
 <?php
  echo $Next;
   if($id == $n)
  {
   echo"<input type='button' value='Edit' id='editButton' onclick=\"location.href='/editTeam.php?n=3'\">";
  }
 ?>
 </div>
 <div id='Challenges' style="text-align:center;overflow-y:scroll;">
 <h2>What Were Some Challenges You Faced Along The Way?</h2></br></br>
 <?php
  echo $Challenges;
   if($id == $n)
  {
   echo"<input type='button' value='Edit' id='editButton' onclick=\"location.href='/editTeam.php?n=4'\">";
  }
 ?>
 </div> 
 </div>
  <div id="smoke">
  <div id="newPP">
   <form action="upload2.php" method="post" enctype="multipart/form-data">
   </br></br></br></br> Select image to upload</br></br>
    <input type="hidden" name="n" value="<?php echo$id; ?>">
    <input type="file" name="fileToUpload" id="fileToUpload"></br></br>
    <input type="submit" value="Upload Image" name="submit">
    <input type="button" value="Cancel" onclick="hideForm()">
   </form>
  </div>
 </div>
 </body>
 <?php
 ?>
</html>


