<!DOCTYPE html>
<html>
<head>
	<?php
		include_once("meta_info.php");
	?>
	<title></title>

	<style type="text/css">
		@import url("general.css");
	</style>
</head>
<body>
<?php
	require("navigator.php");
?>

<form method="post" action="processor.php">
	<label for="Subject">Subject:<input type="text" name="Subject" id="Subject" placeholder="The Subject"></label>
	<p><label for="Content">Message</label></p>
	<textarea name="Content" id="Content" cols="100" rows="20">leave a message~</textarea>
	<p><input type="submit" value="測試遞交"></p>
</form>
</body>
</html>