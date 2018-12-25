<?php 
ob_start(); //Turns on output buffering. Start remembering everything that would normally be outputted, but don't quite do anything with it yet.
session_start();

$timezone = date_default_timezone_set("Asia/Kolkata");

$con = mysqli_connect("localhost", "root", "", "social"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

 ?>