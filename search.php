<?php
	include 'db_connect.php';
	$search = $_REQUEST["booknumber"];
	$result = mysql_query("SELECT * FROM <tableName> WHERE booknumber = '$search' ", $link) or die ("Databade error");
?>
	
<p>back to <a href="index.html">Menu</a></p>

<table>
<?php	
	while($row = mysql_fetch_array($result, MYSQL_BOTH))
{ ?>
	<tr> 
		<td><?php echo $row['booknumber'];?>	</td>
		<td><?php echo $row['dateTimeStart'];?>	</td>
		<td><?php echo $row['dateTimeStop'];?>	</td>
		<td><?php echo $row['carType'];?>	</td>
		<td><?php echo $row['FirstName'];?>	</td>
		<td><?php echo $row['Surname'];?>	</td>
		<td><?php echo $row['PhoneNumber']?>	</td>
		<td><?php echo $row['E-mail]'?>	</td>
		<td><div align="center"><a href="search_edit.php?user_id=<?php print ($row['booknumber']);?>">edit</a></div></td>
    <td><div align="center"><a href="search_delete.php?user_id=<?php print ($row['booknumber']);?>">delete </a></div></td>
		
	</tr>
	
	<?php  // looping close
    } ?>
</table>
