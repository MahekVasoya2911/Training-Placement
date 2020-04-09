<?php
session_start();
include('connection.php');

  $com_email_id = $_POST['com_email_id'];
  $com_pass = $_POST['com_pass'];

$sql = "SELECT * from `company` WHERE com_email_id = '$com_email_id' AND com_pass = '$com_pass'";

//echo "$sql";

$result = mysqli_query($conn, $sql);

if($row = mysqli_fetch_assoc($result)){
	//echo ("logged in");
 $_SESSION['com_email_id'] = $com_email_id;
 	$_SESSION['com_name'] = $row['com_name'];
 	$_SESSION['com_id'] = $row['com_id'];
	
	//die();
	//exit;
	header("Location:com_dashboard.php");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
	//echo "Incoreect";
}
?>