<?php
include "connection.php";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$captcha=$_POST['captcha'];
$run_querry="INSERT INTO `contactus`(`name`, `email`, `subject`, `message`,`captcha_code`) VALUES ('$name','$email','$subject','$message','$captcha')";
$run=mysqli_query($con,$run_querry);
if($run>0)
{
	header("location:../contactus.php");
}
}
?>