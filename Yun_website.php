<?php
	include_once("set_counter.php");
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		include_once("meta_info.php");
	?>
	<title>This is Yun's first website</title>
	<style type="text/css">
		@import url(general.css);
		section{
			height: 92vh;
			background-image: url(background.jpg);
			background-size: 105%;
			background-repeat: no-repeat;
			background-position: 0% 0%;
			display: flex;
			justify-content: flex-end;
		}
		#counter
		{
			border: 0;
			background-color: #ffffffc7;
			width: 280px;
			align-self: flex-end;
		}
	</style>

</head>
<body>
<?php
	include_once("navigator.php");
?>
<section>
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
</section>
<?php
	include_once("footer.php");
?>
</body>
</html>