<?php
 session_start();
 $n = $_GET['n'];
 $server = "localhost";
 $username= "micky";
 $password ="DATA";
 $db = "HTY";
 $conn = new mysqli($server,$username,$password,$db);
 if($conn->connect_error)
 {
  die("connection failed: " . $conn->connect_error);
 }

 $sql = "SELECT NEWTEAMID,InTeam FROM MEMBER where email ='".$_SESSION['userID']."'";

 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)> 0) 
 {
  while($row = mysqli_fetch_assoc($result))
  {
   $id = $row['NEWTEAMID'];
   $inteam = $row['InTeam']; 
  } 
 }


?>
<div style="position:absolute;width:100%;height:100%;background-color:rgba(0, 0, 0, 0.7);top:0px;left:0px;">
<div style="height:40%; width:40%; position:absolute; top:30%; left:30%;background-color:white;border:1px solid black;">
<h2 style="text-align:center;">
Edit 
<?php
 if($n == 1)
 {
  echo"Your Motivation";
 }
 if($n == 2)
 {
  echo"Your Finished Description";
 }
 if($n == 3)
 {
  echo"Next Step";
 }
 if($n == 4)
 {
  echo"The Challenges You Had";
 }

?>
</h2>
</br>
</br>
</br>
<form action="set.php" method="POST">
<div style="align-text:center;">

<div style="text-align:center;">
<textarea name="toChange" id="styled" maxlength="2000" onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')">Enter here...</textarea>
</br></br>
<input type="hidden" name="n" value='<?php echo $n; ?>'>
<input type="hidden" name="teamID" value='<?php echo $id; ?>'>
<input type="submit" value="Submit">
<?php
 echo"<input type='button' value='Cancel' onclick=\"window.location.replace('profileView.php?n=".$id."')\">";
?>
</div>
</div>
</form>
</div>
</div>
