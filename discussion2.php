<?php
 //  $a=$_POST["pid"]
	 echo $b=$_POST["type"];
	 echo $c=$_POST["title"];
	 echo $d=$_POST["post"];
	 echo $e=$_POST["emailid"];
	
	mysql_connect("localhost","root","");
	
	if(mysql_select_db("trainingguide"))
	{
	echo "e";
	}
	if(mysql_query("insert into discussion (Type,Title,Post,Email_id) values('$b','$c','$d','$e')") or die(mysql_error()))
	{
	
	}
	else
	{
	header("location:message.php?msg=You are already register.. ");
	
	
	}
	mysql_query("commit");
	
	
	
 ?>


