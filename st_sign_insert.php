<?php
//session_start();
include('connection.php');
//$aid=$_SESSION['id'];
$stud_name = $_POST['stud_name'];
$s_email_id = $_POST['s_email_id'];
$password = $_POST['password'];
$mob_no = $_POST['mob_no'];

$sql = "INSERT INTO `student`(`stud_id`, `stud_name`, `s_email_id`, `mob_no` , `password`) VALUES (NULL, '$stud_name' , '$s_email_id' , '$mob_no' , '$password')";
//die();
$result = mysqli_query($conn, $sql);

if(($result) == 1){    
    header("Location:student_login.php");
}
else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>