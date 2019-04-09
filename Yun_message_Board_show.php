<!DOCTYPE html>
<html>
<head>
	<?php
		include_once("meta_info.php");
	?>
	<title>Everyone's message</title>
	<style type="text/css">
		@import url(general.css);
	</style>
</head>
<body>
<?php
	include_once("navigator.php");
?>
<div class="Main_Container">

<?php
	include_once("connect.php");	
	$query = "SELECT * FROM message_board ORDER by `Time` DESC";

	if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    $num = 0;
    while ($row = mysqli_fetch_assoc($result))
    {	

    	echo "
    		<br>
    		<table>
				<tr>
					<td class='THEAD'>{$row['Name']}</td>
					<td class='THEAD'>{$row['Time']}</td>
				</tr>
				<tr>
					<td class='THEAD'>Subject</td>
					<td id='Subject+{$num}' colspan='2'>{$row['Subject']}</td>
				</tr>
				<tr>
					<td class='THEAD' colspan='2'>Content</td>
				</tr>
				<tr>
					<td colspan='2'>{$row['Subject']}</td>
				</tr>
			</table>";
			$num++;
	    }
	    /* free result set */
	    mysqli_free_result($result);
	}
?>

<!-- <script type="text/javascript">
	var temp='';
	for(var a = 0; a < 3; a++)
	{
		var subject = document.getElementById("Subject"+String(a)).innerHTML;
			window.alert("String(a)");
		if(subject==null)
		{
			subject.setAttribute(colspan, "2");
			temp+=String(a);
		}
	}
	window.alert(temp);
</script> -->

</div>
<?php
	include_once("footer.php");
?>
</body>
</html>