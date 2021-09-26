<?php
    $a=$_POST["nm"];
	$b=$_POST["eid"];
	$c=$_POST["add"];
	$d=$_POST["cont"];
	$e=$_POST["pid"];
		
	
	mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");
	 
       mysql_query("update companydetail set Name='$a',Email_id='$b',Address='$c',Contact='$d',P_id='$e' where Name='$a'") ;

	mysql_query("commit");
	
	header("location:message1.php?msg=data is updated... ");
?>