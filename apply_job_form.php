<?php
session_start();
?>
<!DOCTYPE html>
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
	

    <link href="selectfield.css" rel="stylesheet" media="all">

    <link href="apply_job.css" rel="stylesheet" media="all">
</head>

<body>
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
                    	<li class="nav-item"><a href="stud_dashboard.php" class="nav-link">Dashboard</a></li>
				<li class="nav-item active"><a href="apply_job.php" class="nav-link">Apply Job</a></li>
				<li class="nav-item"><a href="stud_cpass.php" class="nav-link">Change Password</a></li>
	        	<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="container" style="margin-top: 50px;">
    <div class="page-wrapper  p-t-100 p-b-50" style="background-color:">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title" style="color: black;">Apply for job</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="applyjob_insert.php" enctype="multipart/form-data">
                       <!-- <div class="form-row">
                            <div class="name">Full name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="full_name">
                            </div>
                        </div>-->
						 <div class="form-row">
						 <div class="name">Select Company</div>
						
				
			 <div class="value">
			 <br>
			  <select name="com_id" style="width:300px">
						<option disabled="disabled" selected="selected">Company Name</option>

                <?php
			    include("connection.php");									
			    $query = "select * from company";
				$ex = mysqli_query($conn, $query);	
			    while($row=mysqli_fetch_assoc($ex))
			    {
				echo '<option value="'.$row['com_id'].'">'.$row['com_name'].'</option>'; 			
				
				}
				
			    ?>
			           
               </select>
			   
			</div>
			   
						 </div>
                      
                    <!--    <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>-->
                      <!--  <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder="Message sent to the employer"></textarea>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-row">
                            <div class="name">Upload CV</div>
                            <div class="value">
                              <!--  <div class="input-group js-input-file">-->
                                    <input type="file" name="file_cv" id="file">
                               <!--    <label class="label--file" for="file">Choose file</label>-->
                                  <!--  <span class="input-file__info">No file chosen</span>-->
                           <!--     </div>-->
                                <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
						 <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
                </div>
                    </form>
                </div>
               
            </div>
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


</body>
</html>