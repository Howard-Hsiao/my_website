<?php
	$conn=mysqli_connect("localhost", "root", "Star1999");
	mysqli_select_db($conn, "yun_website");
	mysqli_query($conn, "set names utf8");
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$data=mysqli_query($conn, "select * from message_board");

	$Name='Yun';
	$Subject=$_POST["Subject"];
	$Content=$_POST["Content"];
	$Time=date("Y:m:d H:i:s", time()+2000);//+2000 aims to set the time to Taiwanese one
	if($_POST["Content"])
	{
		$a = mysqli_query($conn, "INSERT INTO `message_board` (`Name`, `Subject`, `Content`, `Time`) VALUES ('Yun', '{$Subject}', '{$Content}', '{$Time}')");
		echo "{$a}";
	}

	echo "{$Name}, {$Subject}, {$Content}, {$Time}";
?>
