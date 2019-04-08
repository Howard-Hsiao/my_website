<!DOCTYPE html>
<html>
<head>
	<?php
		include_once("meta_info.php");
	?>
	<title>Become the honorable client of Yun.</title>
	<style type="text/css">
		@import url("general.css");
	</style>
</head>
<body>
<?php
	include_once("navigator.php");
?>

<div class="Main_Container">
<form method="post" >
	<p><label for="username">Username:<input type="text" id="username" name="username"></label></p>
	<p><label for="password">Password:<input type="password" id="password" name="password"></label></p>
	<p><label for="comfirm">Comfirm :<input type="password" id="comfirm" name="comfirm"></label></p>
</form>

<p><a href="login.php">log in</a></p>

</div>
<?php
	include_once("footer.php");
?>
</body>
</html>