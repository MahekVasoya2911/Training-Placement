<?php
include("connection.php");
if(isset($_POST['con']))
{
$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_subject = $_POST['c_subject'];
$c_message = $_POST['c_message'];

$query = "insert into contact(`contact_id`,`c_name`,`c_email`,`c_subject`,`c_message`) values(NULL,'$c_name','$c_email','$c_subject','$c_message')";
//die();
$re = mysqli_query($conn, $query);

if($re)
{    
//echo "Data inserted successfully";
    header("Location:contact.html");
}
else{
    echo "Data not insert";
}
}
?>