<?php
    $a=$_POST["name"];
	$b=$_POST["eid"];
	$c=$_POST["pid"];
	$d=$_POST["des"];
	mysql_connect("localhost","root","");
	
	if(mysql_select_db("trainingguide"))
	{
	echo "a";
	}
	
	if(mysql_query("insert into feedback values('$a','$b','$c','$d')"))
	{
	header("location:message.php?msg=*****WELCOME*****Successfully Login in Feedbac... ");
	
	}
	
	else
	{
	header("location:message.php?msg=You are already register.. ");
	
	
	}
	mysql_query("commit");
?>