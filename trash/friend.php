<?php
 echo"When this works it should say Aiden</br>";
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
  $sql = "SELECT FirstName FROM MEMBER";
  $result = mysqli_query($conn,$sql);
 
  if(mysqli_num_rows($result)> 0)
  {
   while($row = mysqli_fetch_assoc($result))
   {  
    //$row = $result->fetch_assoc();
    $name = $row["FirstName"];
    echo $name ."</br>";
   }
  }
  else
  {
   echo"something went wrong";
  }
 }

 mysqli_close($conn);

?>
