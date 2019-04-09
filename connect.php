<?php
	$conn=mysqli_connect("52.3.113.165", "Yun", "Star1999");
	mysqli_select_db($conn, "message_board");
	mysqli_query($conn, "set names utf8");
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>
