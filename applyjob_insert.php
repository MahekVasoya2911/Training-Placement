<?php
include("connection.php");
session_start();

$stud_id = $_SESSION['stud_id'];
$com_id=$_POST['com_id'];
$message=$_POST['message'];
//$path = $_FILES['file_cv'];
$date = date('Y-m-d');
//$files = $_FILES['file'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file_cv"]["name"]);
//return;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$path = $_FILES["file_cv"]["name"];
$fileextstored = array('pdf' , 'jpg' , 'png');
	
 $query = "insert into job(`job_id`,`stud_id`,`com_id`,`message`,`path`,`jobstatus`,`date`) values(NULL,'$stud_id','$com_id','$message','$path','pending','$date')";
//die();
$re = mysqli_query($conn, $query);
move_uploaded_file($_FILES["file_cv"]["tmp_name"], $target_file);

//move_uploaded_file($file_cv["tmp_name"],"uploads/".$file_cv["name"]);
if($re)
{    
//echo "Data inserted successfully";
    header("Location:apply_job_form.php");
}

?>