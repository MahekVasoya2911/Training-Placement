<?php
//session_start();
include('connection.php');
//$aid=$_SESSION['id'];
 $com_name = $_POST['com_name'];
 $com_email_id = $_POST['com_email_id'];
 $com_pass = $_POST['com_pass'];
//$firstName = $_POST['firstName'];

$sql = "INSERT INTO `company`(`com_id`, `com_name`, `com_email_id` , `com_pass`) VALUES (NULL, '$com_name' , '$com_email_id' , '$com_pass')";
//die();
$result = mysqli_query($conn, $sql);

if(($result) == 1){    
    header("Location:company_login.php");
}
else{
  /*  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");*/
	echo "Incorrect";
}
?>