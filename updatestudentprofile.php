<?php
    $a=$_POST["nm"];
  	$b=$_POST["rd"];
	$c=$_POST["bd"];
	$d=$_POST["add"];
	$e=$_POST["eid"];
	$f=$_POST["pass"];
	$g=$_POST["er"];
	
	
	
	mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");
	 
       mysql_query("update studentregistration set Name='$a',Gender='$b',Birthdate='$c',Address='$d',Email_id='$e',Password='$f',Er_no ='$g' 
	   where Email_id='$e'") or die("Error in sql query");

	mysql_query("commit");
	
header("location:message.php?msg=data is updated... ");

?>
 