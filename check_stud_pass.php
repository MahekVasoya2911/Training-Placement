<?php
include("connection.php");
session_start();
echo $stud_id = $_SESSION['stud_id'];

echo $oldpass = $_POST['oldpass'];
echo $newpass = $_POST['newpass'];
echo $conpass = $_POST['conpass'];

$query = "select password from student where stud_id='$stud_id'";

$ex = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($ex)){
		//$_SESSION['id']=$row['id']];

	//echo $row['id'];
//print_r($row);
	//die();
	if($row['password'] != $oldpass)
	{
		echo "Enter user Correct Password";
	}
	if($newpass != $conpass)
	{
		echo "Enter Same Password";
	}
	if($row['password'] == $oldpass && $newpass == $conpass)
	{
		$q="update student set password='$conpass' where stud_id='$stud_id' ";
	
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
header("location:stud_dashboard.php?message=".$message);
?>