<?php 
 include 'db_connect.php';
        //assign textbox to variable 
		$edit_PhoneNumber=$_POST['txtPhoneNumber']; 
		$edit_Email=$_POST['txtEmail']; 

		//Update data   
		$result = mysql_query("Update <table> set  
				PhoneNumber='$edit_PhoneNumber',Email='$edit_Email'" );
                if ($result)
		{ echo " Updated Successfully !  <a href='view.php'> back to view </a>"; }
		else
		{ echo "Problem occured !"; }	
?>
 //setakat nie simple giler je, jap lagi nak design
