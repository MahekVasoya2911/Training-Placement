<?php
include("connection.php");
if(isset($_POST['send']))
{
$f_name = $_POST['f_name'];
$f_email = $_POST['f_email'];
$f_subject = $_POST['f_subject'];
$f_message = $_POST['f_message'];

$query = "insert into feedback(`feed_id`,`f_name`,`f_email`,`f_subject`,`f_message`) values(NULL,'$f_name','$f_email','$f_subject','$f_message')";
//die();
$re = mysqli_query($conn, $query);

if($re)
{    
//echo "Data inserted successfully";
    header("Location:index.html");
}
else{
    echo "Feedback not insert";
}
}
?>