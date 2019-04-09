<?php
	session_start();
	$count = 0;
	if (isset($_COOKIE['counter'])) {
		$count = $_COOKIE['counter'];
	}
	if (isset($_COOKIE['counter']))
	{
		$count = $_COOKIE['counter'] + 1;
	}

	setcookie('counter', $count, time() + 30*24*60*60);
	if (!isset($_SESSION['entered']))
	{
		$_SESSION['entered'] = true;
		$updateSession=mysqli_connect("localhost", "Yun", "Star1999");
		mysqli_select_db($updateSession, "message_board");
		mysqli_query($updateSession, "set names utf8");

		$visit_data = mysqli_query($updateSession, "SELECT `people` FROM `visit_people_num`");
		$visit_data = mysqli_fetch_assoc($visit_data);
		$origin_num = $visit_data['people'];
		$visit_num = $origin_num + 1;
		mysqli_query($updateSession, "UPDATE `visit_people_num` SET `people` = {$visit_num} WHERE `visit_people_num`.`people` = {$origin_num}");
		mysqli_free_result($visit_data);
	}
	else
	{
		$_SESSION['entered'] = true;
		$updateSession=mysqli_connect("localhost", "root", "Star1999");
		mysqli_select_db($updateSession, "message_board");
		mysqli_query($updateSession, "set names utf8");

		$visit_data = mysqli_query($updateSession, "SELECT `people` FROM `visit_people_num`");
		$visit_data = mysqli_fetch_assoc($visit_data);
		$visit_num = $visit_data['people'];
	}
?>
