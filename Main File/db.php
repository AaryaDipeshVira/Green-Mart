<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "greenmart";
	$con = mysqli_connect($server,$user,$password,$database) or die("connection error".mysqli_connect_error());
?>