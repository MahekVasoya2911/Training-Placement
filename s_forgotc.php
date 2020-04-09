<?php
include("connection.php");
session_start();
$s_email_id = $_POST['s_email_id'];
$query = "select * from student where s_email_id='$s_email_id'";
$ex = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ex);
$password = $row['password'];
if ($row['s_email_id'] == $s_email_id)
{
echo $_SESSION['s_email_id'] = $s_email_id;
header("location:student_login.php?pwd=$password");
exit;
}
header("Location:stud_forgot.php");
?>