<?php
    $a=$_POST["nm"];
	$b=$_POST["rd"];
	$c=$_POST["bd"];
	$d=$_POST["add"];
	$e=$_POST["eid"];
	$f=$_POST["pass"];
	$g=$_POST["er"];
	$h=$_FILES["file"]["name"];
	mysql_connect("localhost","root","");
	
	if(mysql_select_db("trainingguide"))
	
	{
	echo "a";
	
	}
	if(mysql_query("insert into studentregistration values('$a','$b','$c','$d','$e','$f','$g','$h')"))
	{
	move_uploaded_file($_FILES["file"]["tmp_name"], "profile/" . $_FILES["file"]["name"]);
	header("location:message.php?msg=*****WELCOME*****Successfully Login in Student registration... ");
	
	}
	else
	{
	header("location:message.php?msg=You are already register.. ");
	
	
	}
	
	
	mysql_query("commit");
?>



 


 
 
 
 
