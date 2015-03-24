<?php 
	include 'db_connect.php';
	$search=$REQUEST["bookNumber"];
	$result = mysql_query("select * from carRent where name LIKE '$search' ", $link) or die ("Database Error");
?>

<p>back to <a href="index.html">Menu</a></p>

<table width="493" border="1">
  <?php 
	//data looping
	while($row = mysql_fetch_array($result, MYSQL_BOTH))
	{ ?>
	<tr> 
		<td><?php echo $row['id'];?>	</td>
		<td><?php echo $row['name'];?>	</td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['tel'];?>	</td>
	</tr>
	
	<?php  // looping close
    } ?>
</table>
