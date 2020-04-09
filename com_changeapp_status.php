<?php
session_start();
require("connection.php");
$job_id = $_GET['job_id'];
//die();

//	$job_id=$_GET['job_id'];
	$sql = "UPDATE `job` SET `jobstatus`='approve' WHERE job_id = '$job_id'";
//die();
$result = mysqli_query($conn , $sql);
header("Location:com_dashboard.php");
?>