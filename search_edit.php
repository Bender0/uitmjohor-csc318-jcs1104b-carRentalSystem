<html>
<title>edit<titel>
<head>

</head>

<body>
<form action="edit.php" method="post">
<?php 
 include 'db_connect.php';
         //edit data
                $edit_booknumber=$_GET['user_booknumber']; 
	   $result = mysql_query("SELECT * FROM  <table> WHERE booknumber='$edit_booknumber'" );
                 	
?>

<table border="1">
<?php while ( $user = mysql_fetch_array( $result ))
{
				 $booknumber=$user['booknumber'];
				 $dateTimeStart=$user['dateTimeStart'];
				 $dateTimeStop= $user['dateTimeStop'];
				 $carType= $user['cartype'];
				 $FirstName = $user['FirstName'];
				 $Surname = $user['surname'];
				 $PhoneNumber = $user['PhoneNumber'];
				 $Email = $user['Email'];
}
?>
  <tr>
    <td width="75"><strong>PhoneNumber</strong></td>
    <td width="121"> <input name="txtPhoneNumber" type="text" value="<?php echo $PhoneNumber ?>"></td>
  </tr>
  <tr>
    <td><strong>E-mail</strong></td>
    <td>
      <input name="txtEmail" type="text" value="<?php echo $Email ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit">
    </div></td>
  </tr>
  
</table>
</form>

</body>
</html>
