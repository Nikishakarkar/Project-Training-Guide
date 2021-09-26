<?php
 $eid = $_POST["email"];
$bd = $_POST["bdate"];

session_start();


        

    mysql_connect("localhost","root","");
	mysql_select_db("trainingguide");
	    $result = mysql_query("SELECT * FROM  studentregistration where Email_id='$eid' and Birthdate='$bd'");
	    $count = mysql_num_rows($result);
	
	 if($count >= 1)
	   {
	 
           while($row = mysql_fetch_array($result))
	   {
	     $ps = $row["Password"];      
		  header("location:message.php?msg=Your Password is...".$ps);      
	                    
	   }
	   
	   }
	else
	   {
	         header("location:message.php?msg= email id or birthdate is not availablejkrljek.");   
	   }

?>