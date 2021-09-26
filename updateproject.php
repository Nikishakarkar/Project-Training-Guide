<?php
    $a=$_POST["bc"];
	$b=$_POST["tl"];
	$c=$_POST["ac"];
	
		
	
	mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");
	 
       mysql_query("update project set Branch='$a',Title='$b',Abstract='$c' where Branch='$a'") ;

	mysql_query("commit");
	

header("location:message1.php?msg=data is updated... ");
?>