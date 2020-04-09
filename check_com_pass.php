<?php
session_start();
include("connection.php");

$com_id = $_SESSION['com_id'];
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass'];
$conpass = $_POST['conpass'];
//die();
$query = "select com_pass from company where com_id='$com_id'";

$ex = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($ex)){
		//$_SESSION['id']=$row['id']];

	//echo $row['id'];
//print_r($row);
	//die();
	if($row['com_pass'] != $oldpass)
	{
		echo "Enter user Correct Password";
	}
	if($newpass != $conpass)
	{
		echo "Enter Same Password";
	}
	if($row['com_pass'] == $oldpass && $newpass == $conpass)
	{
		 $q="update company set com_pass='$conpass' where com_id='$com_id' ";
	//die();
		$e=mysqli_query($conn, $q);
	}

if($e==1)
	{
		$message="password change sucessfully";
		//header("location:stud_dashboard.php");
	}
	else
	{
		$message="Password not change...try again";
	}
		

}
header("location:com_dashboard.php?message=".$message);
?>