<?php 
 include 'db_connect.php';
    //dalete data
    $delete_booknumber=$_GET['user_booknumber']; 
	$result = mysql_query("DELETE FROM <table> WHERE booknumber='$delete_booknumber'" );
		if ($result)
		{ echo " Delete Successfully !  <a href='search.php'> back to view </a>";		
		}
		else
		{ echo "Problem occured !"; }	
?>
