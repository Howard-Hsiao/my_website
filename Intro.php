<?php
	include_once("set_counter.php");
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		include_once("meta_info.php");
	?>
	<title>Yun's Introduction</title>
	<style type="text/css">
		@import url(general.css);
		#counter
		{
			border: 0;
			background-color: #ffffffc7;
			width: 280px;
			align-self: center;
		}
	</style>
</head>
<body>
<?php
	include_once("navigator.php");
?>

<nav class="sidebar">


</nav>

<div class="Main_Container">
	<section>
		<table>
		<tbody>
			<tr>
				<td rowspan="4" width="350px"><img src="Yun_6.jpg" width=100%></td>
				<td class="tableTitle">Name</td>
				<td>蕭昀豪(Yun)</td>
			</tr>
			<tr>
				<td class="tableTitle">School</td>
				<td>National Taiwan University</td>
			</tr>
			<tr>
				<td class="tableTitle">Department</td>
				<td>Information Management</td>
			</tr>
			<tr>
				<td class="tableTitle">facebook</td>
				<td>
					<a href="https://www.facebook.com/profile.php?id=100008176530865">https://www.facebook.com/profile.php?id=100008176530865</a></td>
			</tr>
		</tbody>
		</table>
		<br>
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
</div>

<?php
	include_once("footer.php");
?>
</body>
</html>