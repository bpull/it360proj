<html>
	<head>
		<title>HackTheYard 2k16</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>

		<link href='https://fonts.googleapis.com/css?family=Kanit:400,600,700,500' rel='stylesheet' type='text/css'>
		<link href="./css/current.css" media="all" rel="stylesheet" type="text/css" />
		<link href="./css/hover.css" rel="stylesheet" media="all">
		<link href="./css/font-awesome.css" rel="stylesheet" media="all">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="smoothscroll.js"></script>
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

		<!-- Start of nav bar -->
		<ul class="nav">
			<li><a href="#first"class ="smoothScroll">Top</a></li>
			<li><a href="#second"class ="smoothScroll">About</a></li>
			<li><a href="#third1"class ="smoothScroll">Key Items</a></li>
			<li><a href="#fourth"class ="smoothScroll">Schedule</a></li>
			<li><a href="#fifth"class ="smoothScroll">Questions?</a></li>
			<!--<li><a href="http://www.xkcd.com/"class ="smoothScroll">Fun</a></li>-->
		</ul>


		<!-- Start of the page -->
		<div id ="first"></div>
		<div class = "header">
			<div class ="overlay" >
				<div class="front-container">
					<img src="pics/Untitled.png" style="max-width: 100%;height: 35%;display: block;margin:auto;"/>
					<h1>HackTheYard</h1>
					</br>
					<h2>March 4-6, 2016</h2>
					<h2>United States Naval Academy</h2>
					</br>
					<button class="myButton" onclick="showLogin()" >Login</button>
					<button class="myButton" onclick="show()" >Register</button><br><br><br>
					<!--<h2> Registration is now closed! If you were unable to register, please email us at hacktheyard@gmail.com! </h3>
					<strong>Please note that this event is currently limited to Government Employees, Midshipmen of the Naval Academy, and select universities only</strong>-->

				</div>
				<a href="#second" class="smoothScroll" >
					<div class="front-chev hvr-pulse" >

						<h1><i class="fa fa-angle-double-down"></i></h1>
					</div>
				</a>
		</div>

		<!-- Start of FAQ page -->
		<div id="second" style="position:absolute;top:980px;"></div>
		<div class = "second" id="faq" style="border-top:5px solid rgb(236,222,48)">
			<div class="faq-container">
				<h3>How To Succeed</h3>
			</div>


			<div class ="succeed">
				<div class="asdf1">
					<h4>1</h4>
					Think about what you want to make better!
					<br><br><br><br><br>
					<span style="font-size:12pt">
						There are many things in this world that could be made better.
						Imagine something that could change your daily life, whether it be small or large, and make it!
					</span>
				</div>

				<div class="asdf2">
					<h4>2</h4>
					Find a team of friends or even strangers!
					<br><br><br><br><br>
					<span style="font-size:12pt">
						Everything is better in a team and our profession is all about teamwork.
						Try to find people who have similiar interests and work together towards awesomeness.
					</span>
				</div>

				<div class="asdf3">
					<h4>3</h4>
					Use datasets, awesome gear, and mentor help to make something amazing!
					<br><br><br><br>
					<span style="font-size:12pt">
						There will be plenty of giant databases and sweet hardware available to aid your project.
						Check out something new or familiar and use it to make something better.
					</span>
				</div>
			</div>
			<a href="#third" class="smoothScroll" >
				<div class="front-chev hvr-pulse"  >
					<h1><i class="fa fa-angle-double-down"></i></h1>
				</div>
			</a>

		</div>

		<!--End of FAQ page-->
		<div class ="third1" id="third1"></div>
		<div class = "third" id="third"style="border-top:5px solid rgb(236,222,48);text-align: center; color: rgb(44, 44, 44);">
			<br>
			<div class="asdfgh1">
				<br><br>
			<h4>Key Items</h4>
			Laptop/Personal Computer<br><br><br>
				Mouse/Keyboard<br><br><br>
				Toiletries<br><br><br>
				Ideas<br><br><br>
			</div>
			<div class="asdfgh2">
				<h4>Highlights</h4>
				Drone Racing<br><br>
				Super Smash Brothers Tournament<br><br>
				Exposure to a New Community<br><br>
				Learn New Techniques<br><br>
				Work with Experts from the Fleet and DoD<br><br>
				Create a New Technology<br><br>
				Opportunity to Change the World<br><br>
				<br><br>
			</div>
		</div>

		<!--Start of team page-->
		<div class = "fourth" id="fourth"style="border-top:5px solid rgb(236,222,48)">
            <h3>Schedule</h3>
			<br>
			<div class="asdfg1" style="font-size: 12pt">
				<h4>Friday</h4>
				<br><br>
				 1700-1900 Registration / Dinner (Optional) in King Hall<br><br>
		         1900      Orientation / Keynote Speech<br><br>
		         2000      Hacking Begins<br><br>
				 2300      End of Day<br><br>
			</div>
			<div class="asdfg2"style="font-size: 12pt">
				<h4>Saturday</h4>
				<br><br>
				0700      Morning Kickoff<br><br>
				0630-0830 Breakfast Served in King Hall<br><br>
				<!--<strong>0830 Drone Racing<br><br></strong>-->
				0900-1000 Tech talk<br><br>
				1130-1330 Lunch Served in King Hall<br><br>
				1400-1500 Tech talk<br><br>
				<!--1500      Super Smash Bro's Tournament<br><br>-->
				1900      Dinner Served in King Hall<br><br>
				2000-2130 Recreation Time<br><br>
				2300      End of Day
			</div>
			<div class="asdfg3"style="font-size: 12pt">
				<h4>Sunday</h4>
				<br><br>
				0700-1130 Hacking<br><br>
				0630-1100 Breakfast Served in King Hall<br><br>
				1130	  Hacking Ends (with submission!)<br><br>
				1100-1230 Lunch Served in King Hall (Optional)<br><br>
				1300-1400 Demos for Judges<br><br>
				1430-1500 Awards / Closing ceremony<br><br>
				1530      Event Breakdown
			</div>
		</div>

		<div class="fifth" id="fifth" style="border-top:5px solid rgb(236,222,48)">
			<h3>Contact Us</h3>
			<br><br>
			If you have any more questions about anything, feel free to shoot us an email anytime at: <br/>
			<strong>hacktheyard@gmail.com</strong><br><br>
			<span style="font-size:10pt">
			</span>
		</div>
		<!-- End of team page -->

	</body>
	<div id="loginBox">
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
</html>
