<?php
//code for logout (starts)
	session_start();
	if(isset($_SESSION["userid"])){
		session_unset();
		session_destroy();
		echo "<script>alert('Logged out successfully!');</script>";
		echo "<script>window.location.href='index.php';</script>";
	}
	//code for login (ends)
?>