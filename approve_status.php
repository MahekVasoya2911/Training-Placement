<!DOCTYPE html>
<?php
session_start();
if(isset($_REQUEST['message'])){
	echo '<script type="text/javascript">alert("'.$_REQUEST['message'].'")</script>';
}
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

<!--	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style3.css" rel="stylesheet">--> 
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />

  
  <link href="css/style-responsive.css" rel="stylesheet">



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
				<li class="nav-item active"><a href="approve_status.php" class="nav-link">Approve Applications</a></li>
					<li class="nav-item"><a href="com_rej_sta.php" class="nav-link">Rejected Applications</a></li>

	        	<li class="nav-item"><a href="company_cpass.php" class="nav-link">Change Password</a></li>
				<li class="nav-item"><a href="com_logout.php" class="nav-link">Logout</a></li>
	        	
	        </ul>
	      </div>
	    </div>
	  </nav>
		 
	<section id="container">
    <div class="row ">
    <div class="col-md" style="margin-left: 20px; margin-right: 20px;">
      <div class="content-panel">
	  <h4>
	  <input id="gfg" type="text" placeholder="Search here" style="margin-left:1100px"></h4>
        <table class="table table-striped table-advance table-hover">
        
          <hr>
          <thead>
            <tr>
			  <th><i class="fa fa-key"></i>Serial Number</th>
              <th><i class="fa fa-graduation-cap"></i> Student Name</th>
              <th class="hidden-phone"><i class="fa fa-envelope"></i> Email</th>
              <th><i class="fa fa-phone"></i> Phone</th>
             <!-- <th><i class="fa fa-comments"></i> Message</th>-->
              <th><i class="fa fa-inbox"></i> Resume</th>
             <!-- <th><i class=" fa fa-edit"></i> Status</th>
              <th></th>-->
            </tr>
          </thead>
		
		   <?php
		  include("connection.php");									
	      //$query = "select * from job where stud_id = '".$_SESSION['stud_id']."'";
		  $query= "select * from job as j
				   left join student as s on j.stud_id = s.stud_id where
				   (j.com_id='".$_SESSION['com_id']."' and jobstatus='approve')";
		  $ex = mysqli_query($conn, $query);	
		  $cnt=0;
	      while($row=mysqli_fetch_assoc($ex))
		  {
			  $cnt++;
		  ?>
          <tbody id="geeks">
		  
            <tr>
			  <td><?php echo $cnt?></td>
              <td><?php echo $row['stud_name']?></td>
              <td class="hidden-phone"><?php echo $row['s_email_id']?></td>
              <td>+91 <?php echo $row['mob_no']?></td>
             <!-- <td><?php echo $row['message']?></td>-->
              <td><a href="uploads/<?php echo $row['path']?>"><button class="btn btn-success btn-xs"><i class="fa fa-download" style="align-content: center;"></i></button></a></td>

            </tr>
           
          </tbody>
		  <?php
		  }
		  ?>
        </table>
      </div>
	
	
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
<script> 
            $(document).ready(function() { 
                $("#gfg").on("keyup", function() { 
                    var value = $(this).val().toLowerCase(); 
                    $("#geeks tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .toLowerCase().indexOf(value) > -1) 
                    }); 
                }); 
            }); 
        </script> 
	</body>
</html>

