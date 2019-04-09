<?php
echo "<table id='counter'>
		<tr>
			<td>You have visit this site:<?php echo {$_COOKIE['counter']} ?> times</td>
		</tr>
		<tr>
			<td>There are totally
				<?php
					echo {$visit_num};
				?>
			 people visit my site!</td>
		</tr>
	</table>";
?>