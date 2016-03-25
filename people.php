<?php
 session_start();
 $server = "localhost";
 $username= "micky";
 $password ="DATA";
 $db = "HTY";
 $conn = new mysqli($server,$username,$password,$db);
?>
<html>
 <head>
 <title>
  Friend
 </title>
  <link href="./css/people.css" media="all" rel="stylesheet" type="text/css" />
 </head>
 <body>
<?php
 $conn = new mysqli($server,$username,$password,$db);
 if($conn->connect_error)
 {
  die("connection failed: " . $conn->connect_error);
 }
 else
 {
  $sql = "SELECT FirstName, LastName, email,InTeam,MemberID FROM MEMBER";
  $result = mysqli_query($conn,$sql);
  echo"</br></br></br></br></br>";
  if(mysqli_num_rows($result)> 0)
  {
   while($row = mysqli_fetch_assoc($result))
   {
    if($_SESSION['userID'] == $row['email'])
    {continue;}
    $first = $row['FirstName'];
    $last = $row['LastName'];
    $email = $row['email'];
    $page = "<a href='otherProfile.php?n=".$row[MemberID]."'><div id='person'>";
    #$page .= $first;
    $target_file = "./profilePictures/";
    $target_file .= $email;
    $target_file .= ".jpg";
    if (file_exists($target_file))
    {
     $page .= "<img src='";
     $page .= $target_file;
     $page .= "' height='75%' width='100%'>";
    }
    else
    {
     $page .= "<img src='";
     $page .= "./profilePictures/pvsnp.jpg'";
     $page .= "height='75%' width='100%'>";
    }
    $page .= $first ." ".$last."</br>";
    if(!isset($row['InTeam']) || $row['InTeam'] =='' || $row['InTeam'] == 0)
    {
     $page .= "Not on a team";
    }
    else
    {
     $page .= "I'm apart of a great team!";
    } 
    $page .="</div></a>";
    echo $page;
   }
  }
 }
?>
   <div id="nav">
    <p><a href="teams.php"><span id="links">Teams</span></a>
    <a href="people.php"><span id="links">People</span></a>
    <a href="profile.php"><span id="links">Profile</span></a>
    <a href="logout.php"><span id="links">Logout</span></a></p>
   </div>
 </body>
</html>
