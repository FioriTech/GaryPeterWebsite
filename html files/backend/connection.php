<?php
$db="garypeter";
$con=mysqli_connect("localhost","root","",$db);
if(!$con){
	die("connection failed:".mysqli_connect_error());
}
?>