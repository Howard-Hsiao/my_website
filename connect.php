<?php
	$conn=mysqli_connect("localhost", "root", "Star1999");
	mysqli_select_db("yun_website");
	mysqli_query("set names utf8");
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>