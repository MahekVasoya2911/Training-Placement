<!DOCTYPE html>
<?php
include("connection.php");
session_start();
?>
<html>
<title>Training And Placement</title>
	<head>
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/bootstrap1.min.css">
	<link rel="stylesheet" href="css/animate1.css">
	<link rel="stylesheet" href="css/style1.css">
	 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">



	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body class="style-3" background="images/geometry2.png">
    <div class="container pt-5">
			<div class="row justify-content-between">
				<div class="col">
					<a class="navbar-brand" href="index.html">Training<span> & </span><span>Placement.</span></a>
				</div>
				<div class="col d-flex justify-content-end">
					
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
		
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	         <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="com_dashboard.php" class="nav-link">Dashboard</a></li>
				<li class="nav-item"><a href="approve_status.php" class="nav-link">Approve Applications</a></li>
					<li class="nav-item"><a href="com_rej_sta.php" class="nav-link">Rejected Applications</a></li>

	        	<li class="nav-item active"><a href="company_cpass.php" class="nav-link">Change Password</a></li>
				<li class="nav-item"><a href="com_logout.php" class="nav-link">Logout</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-push-4">
					<!-- Start Sign In Form -->
					<form action="check_com_pass.php" method="post" class="fh5co-form animate-box" data-animate-effect="fadeInRight">
						<h2>Change Password</h2>
						<div class="form-group">
							<label for="username" class="sr-only">Old password</label>
							<input type="text" class="form-control" placeholder="Old Password" name="oldpass" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">New Password</label>
							<input type="text" class="form-control" id="psw" placeholder="New Password" name="newpass" 
							pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and special character and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Re-enter New Password</label>
							<input type="text" class="form-control" placeholder="Re-enter New Password" name="conpass" autocomplete="off">
						</div>
						
						<div class="form-group">
							<input type="submit" name="change" value="Change Password" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->


				</div>
			</div>
		</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Placeholder -->
	<script src="js/jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
<!--<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var special_char = document.getElementById("special_char");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length <= 12) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>-->
 
	</body>
</html>