<!DOCTYPE html>
<html>
<head>
	<?php
		include_once("meta_info.php");
	?>
	<title></title>
</head>
<body>
<?php
	require("navigator.php");
?>

<form method="post">
	<label for="Subject">Subject:<input type="text" name="Subject" id="Subject" placeholder="The Subject"></label>
	<p><label for="Content">Message</label></p>
	<textarea name="Content" id="Content" cols="30" rows="10">leave a message~</textarea>
	<p><input type="submit" value="測試遞交"></p>
</form>
</body>
</html>