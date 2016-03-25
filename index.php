<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hack the Yard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style2.css" rel="stylesheet">

    <script src="js/jquery-2.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
 <?php
                if($_COOKIE['wrong'] == "pass")
                {
                 echo"alert('Please ensure that your passwords match to complete registration');";
                }
                if($_COOKIE['wrong'] == "blank")
                {
                 echo"alert('Please fill out the entire form to complete registration');";
                }
                if($_COOKIE['wrong'] == "have")
                {
                 echo"alert('This user has already been registered');";
                }
                ?>

</script>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Hack the Yard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#keyItems">Key Items</a></li>
            <li><a href="#schedule">Schedule</a></li>
            <li><a href="">Teams</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row" id="home" style="text-align:center; color:#FFFFFF">
        <div id="logo"></div>
        <h1>Hack The Yard</h1>
        <h2>March 4-6, 2016</h2>
        <h2>United States Naval Academy</h2>
        
        <button class="myButton" onclick="showLogin()">Login</button>
        <button class="myButton" onclick="show()">Register</button>

      </div>
      <div class="row" id="about" style="background-color:#022161;text-align:center;color:#FFFFFF">
        <h1>How To Succeed</h1>
        <div class="col-sm-4" style="text-align:center"><h2>1</h2><h3>Think about what you want to make better!</h3><h4>There are many things in this world that could be made better. Imagine something that could change your daily life, whether it be small or large, and make it!</h4></div>
        <div class="col-sm-4" style="text-align:center;padding-left:15px; border-left: 1px solid #ccc; padding-right:15px; border-right: 1px solid #ccc;"><h2>2</h2><h3>Find a team of friends or even strangers! </h3><h4>Everything is better in a team and our profession is all about teamwork. Try to find people who have similiar interests and work together towards awesomeness.</h4></div>
        <div class="col-sm-4" style="text-align:center"><h2>3</h2><h3>Use datasets, awesome gear, and mentor help to make something amazing!</h3><h4>There will be plenty of giant databases and sweet hardware available to aid your project. Check out something new or familiar and use it to make something better.</h4></div>
      </div>
      <div class="row" id="keyItems" style="background-color:#FFFFFF">
        <div class="col-sm-6" style="text-align:center;">
          <h1>Key Items</h1>
          <h2>Laptop/Personal Computer</h2>
          <h2>Mouse/Keyboard/<h2>
          <h2>Toiletries</h2>
          <h2>Ideas</h2>
        </div>
        <div class="col-sm-6" style="text-align:center;padding-left:15px; border-left: 1px solid #333;">
          <h1>Highlights</h1>
          <h2>Drone Racing</h2>
          <h2>Super Smash Brothers Tournament</h2>
          <h2>Exposure to a New Community</h2>
          <h2>Learn New Techniques</h2>
          <h2>Work with Experts from the Fleet and DoD</h2>
          <h2>Create a New Technology</h2>
          <h2>Opportunity to Change the World</h2>
        </div>
      </div>
      <div class="row" id="schedule" style="background-color:#022161;text-align:center;color:#FFFFFF">
        <h1>Schedule</h1>
        <div class="col-sm-4">
          <h2>Friday</h2>
          <h3>1700-1900 Registration / Dinner (Optional) in King Hall</h3>
          <h3>1900 Orientation / Keynote Speech</h3>
          <h3>2000 Hacking Begins</h3>
          <h3>2300 End of Day</h3>
        </div>
        <div class="col-sm-4" style="padding-left:15px; border-left: 1px solid #ccc; padding-right:15px; border-right: 1px solid #ccc;">
          <h2>Saturday</h2>
          <h3>0700 Morning Kickoff</h3>
          <h3>0630-0830 Breakfast Served in King Hall</h3>
          <h3>0900-1000 Tech talk</h3>
          <h3>1130-1330 Lunch Served in King Hall</h3>
          <h3>1400-1500 Tech talk</h3>
          <h3>1900 Dinner Served in King Hall</h3>
          <h3>2000-2130 Recreation Time</h3>
          <h3>2300 End of Day</h3>
        </div>
        <div class="col-sm-4">
          <h2>Sunday</h2>
          <h3>0700-1130 Hacking</h3>
          <h3>0630-1100 Breakfast Served in King Hall</h3>
          <h3>1130  Hacking Ends (with submission!)</h3>
          <h3>1100-1230 Lunch Served in King Hall (Optional)</h3>
          <h3>1300-1400 Demos for Judges</h3>
          <h3>1430-1500 Awards / Closing ceremony</h3>
          <h3>1530 Event Breakdown</h3>
        </div>
      </div>
      <div class="row" id="contact" style="text-align:center; background-color:#FFFFFF">
        <h1>Contact</h1>
        <h4>If you have any more questions about anything, feel free to shoot us an email anytime at: hacktheyard@gmail.com</h4>
        <br/>
      </div>
      <div id="loginBox">
        <!--login divs -->
     <div id="innerLogin">
      </br>
      <span style="color:white;padding;">Please Login Using Your</span>
      <span style="color:white;padding">Email and Password</span>
            <div id="align" >
             <form action="pass_check.php" method="POST">
              Email <input type="text" name="id"></br></br>
              Password <input type="password" name="pwd"></br></br>
              <input type="submit" value="Submit">
              <input type ="button" value="Cancel" onclick="hideLogin()">
             </form>
      </div>
           </div>
    </div>
    <div id="registerBox">
       </br></br></br></br>
       </br></br></br></br>
       </br></br></br></br>
     <div id="innerLogin2">
      </br>
       <h3 style="color:white;padding;">Please Register Below</h3>
       <div id="align2" style="align:right; margin-right:10%;">
       <form action="register.php" method="POST"> 
      First Name* <input type="text" name="First"></br></br>
      Last Name* <input type="text" name="Last"></br></br>
      Major <input type="text" name="Major"></br></br>
      Age <input type="text" name="Age"></br></br>
      Email* <input type="text" name="Email"></br></br>
      Phone <input type="text" name="Phone"></br></br>
      Interesting Fact <input type="text" name="Fact"></br></br>
      Password* <input type="password" name="Pass"></br></br>
      Password Again* <input type="password" name="Pass2"></br>
      <input type="submit" value="Submit" style="margin:5px;">
      <input type="button" value="Cancel" onclick="hideRegister()">
    </form>
     </div>
    </div>
    </div>
    <script>
      function showLogin()
      {
      $("#loginBox").show();
      }
      function hideLogin()
                 {
                  $("#loginBox").hide();
                 }
      function show()
      {
      $("#registerBox").show();
      }
      function hideRegister()
      {
      $("#registerBox").hide();
       }
       hideLogin();
       hideRegister();
      </script>

  </body>
</html>
