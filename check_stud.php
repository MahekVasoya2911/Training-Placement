<?php
session_start();
include('connection.php');

 $s_email_id = $_POST['s_email_id'];
 $password = $_POST['password'];

$sql = "SELECT * from `student` WHERE s_email_id = '$s_email_id' AND password = '$password'";

//echo "$sql";

$result = mysqli_query($conn, $sql);

if($row = mysqli_fetch_assoc($result)){
	//echo ("logged in");
	$_SESSION['s_email_id'] = $s_email_id;
	$_SESSION['stud_name'] = $row['stud_name'];
 	$_SESSION['stud_id'] = $row['stud_id'];
	
//	die();
	//exit;
	header("Location: stud_dashboard.php");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
	//echo "Incoreect";
}
?>