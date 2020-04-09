<?php
session_start();
?>

<html lang="en">
  <head>
    <title>Training And Placement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
<!--<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="css/style3.css" rel="stylesheet">-->
   <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />

 <link href="css/style-responsive.css" rel="stylesheet">
	
  </head>
 

    <body class="style-3" background="images/geometry2.png">
      <div class="container pt-5">
              <div class="row justify-content-between">
                  <div class="col">
				  <h6>Welcome <?php echo $_SESSION['stud_name']; ?></h6>
                      <a class="navbar-brand" href="index.html">Training<span> & </span><span>Placement.</span>
					  
					 
					  </a>
					  
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
                  <li class="nav-item active"><a href="stud_dashboard.php" class="nav-link">Dashboard</a></li>
				<li class="nav-item"><a href="apply_job.php" class="nav-link">Apply Job</a></li>
				<li class="nav-item"><a href="stud_cpass.php" class="nav-link">Change Password</a></li>
	        	<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>
   	
	<section id="container">
   <div class="row">
    <div class="col-md" style="margin-left: 20px; margin-right: 20px;">
      <div class="content-panel">
	     <h5>Pending Applications</h5>
			  <table class="table table-striped table-advance table-hover">
    
	  <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th><i class="fa fa-key"></i>Serial Number</th>
              <!--<th class="hidden-phone"><i class="fa fa-envelope"></i> Email</th>-->
              <th><i class="fa fa-list"></i>Company Name</th>
			    <th><i class="fa fa-envelope"></i>Company Email ID</th>
           <!--   <th><i class="fa fa-comments"></i> Message</th>
              <th><i class="fa fa-inbox"></i> Resume</th>-->
              <th><i class=" fa fa-edit"></i> Status</th>
			  <th><i class=" fa fa-edit"></i>Apply Date</th>
            
            </tr>
          </thead>
          <tbody>
		  <?php
		  include("connection.php");									
	      //$query = "select * from job where stud_id = '".$_SESSION['stud_id']."'";
		  $query= "select * from job as j
				   left join company as c on j.com_id = c.com_id where
				   j.stud_id='".$_SESSION['stud_id']."'";
		  $ex = mysqli_query($conn, $query);	
		  $cnt=0;
	      while($row=mysqli_fetch_assoc($ex))
		  {
			  $cnt++;
		  ?>
            <tr>
			  <td width="250"><?php echo $cnt?></td>
              <td width="350"><?php echo $row['com_name']?></td>
			   <td width="400"><?php echo $row['com_email_id']?></td>
              <td width="300"><?php echo $row['jobstatus']?></td>
			  <td width="300"><?php echo $row['date']?></td>
             
              <!--<td><a href="img/ny.jpg" download><button class="btn btn-success btn-xs"><i class="fa fa-download" style="align-content: center;"></i></button></a></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                 
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>-->
            </tr>
          <?php
		  }
		  ?>
        
          </tbody>
        </table>
      </div>
	   </div>
	      </div>
	</section>
	
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
 
    
  </body>
</html>