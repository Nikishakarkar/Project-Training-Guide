<?php
   echo $a=$_POST["nm"];
	echo $b=$_POST["eid"];
	echo $c=$_POST["db"];
	echo $d=$_POST["dis"];
	echo $e=$_POST["soft"];
	
	mysql_connect("localhost","root","");
	mysql_select_db("trainingguide");
	mysql_query("update platformdetail set Email_id='$b',Database='$c',Description='$d',Software='$e' where Name='$a'") or die("not updated") ;
   mysql_query("commit");
	header("location:message1.php?msg=data is updated... ");

?>