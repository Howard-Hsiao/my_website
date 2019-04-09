<?php
	$conn=mysqli_connect("localhost", "root", "Star1999");
	mysqli_select_db($conn, "message_board");
	mysqli_query($conn, "set names utf8");
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$data=mysqli_query($conn, "select * from message_board");

	$Name=$_POST["Name"];
	$Subject=$_POST["Subject"];
	$Content=$_POST["Content"];
	$Time=date("Y:m:d H:i:s", time()+2000);//+2000 aims to set the time to Taiwanese one
	if($Content)
	{
		mysqli_query($conn, "INSERT INTO `message_board` (`Name`, `Subject`, `Content`, `Time`) VALUES ('{$Name}', '{$Subject}', '{$Content}', '{$Time}')");
	}
	header( 'Location: Yun_message_Board_show.php' );
	exit();
?>
