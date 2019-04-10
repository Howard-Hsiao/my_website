<?php
	include_once("set_counter.php");
?>

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
<br><a href='Yun_message_board_input.php'>Write a message</a>
<?php
	include_once("connect.php");	
	$query = "SELECT * FROM message_board ORDER by `Time` ASC";

	if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    $num = 0;
    while ($row = mysqli_fetch_assoc($result))
    {	
    	$Name=htmlentities($row['Name']);
    	$Subject=htmlentities($row['Subject']);
    	$Content=htmlentities($row['Content']);
    	echo "
    		<br>
    		<table>
				<tr>
					<td class='THEAD'>{$Name}</td>
					<td class='THEAD'>{$row['Time']}</td>
				</tr>
				<tr>
					<td class='THEAD'>Subject</td>
					<td id='Subject+{$num}' colspan='2'>{$Subject}</td>
				</tr>
				<tr>
					<td class='THEAD' colspan='2'>Content</td>
				</tr>
				<tr>
					<td colspan='2'>{$Content}</td>
				</tr>
			</table>";
			$num++;
	    }
	    echo "<p><a href='Yun_message_board_input.php'>Write a message</a></p>";
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
<table id='counter'>
    <tr>
        <td>You have visit this site:<?php echo $_COOKIE['counter'] ?> times</td>
    </tr>
    <tr>
        <td>There are totally
            <?php
                echo $visit_num;
            ?>
         people visit my site!</td>
    </tr>
</table>
</div>
<?php
	include_once("footer.php");
?>
</body>
</html>
