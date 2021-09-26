<?php
    $a=$_POST["pid"];
	$b=$_POST["type"];
	$c=$_POST["title"];
	$d=$_POST["post"];
	$e=$_POST["emailid"];
		
	
	mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");
	 
       mysql_query("update discussion set P_id='$a',Type='$b',Title='$c',Post='$d',Email_id='$e' where P_id='$a'") ;

	mysql_query("commit");
	
	header("location:message.php?msg=data is updated... ");
?>