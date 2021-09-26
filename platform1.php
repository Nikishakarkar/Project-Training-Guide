<?php
    $a=$_POST["nm"];
	$b=$_POST["eid"];
	$c=$_POST["db"];
	$d=$_POST["dis"];
	$e=$_POST["soft"];
	$f=$_POST["file"]["name"];
	mysql_connect("localhost","root","");
	
	if(mysql_select_db("trainingguide"))
	{
	echo "a";
	}
	if(mysql_query("insert into platformdetail values('$a','$b','$c','$d','$e','$f')"))
	{
	move_uploaded_file($_FILES["file"]["tmp_name"], "profile/" . $_FILES["file"]["name"]);
	header("location:message1.php?msg=*****WELCOME*****Successfully Login in platform detail... ");
	
	}
	else
	{
	header("location:message.php?msg=You are already register.. ");
	}
	
	mysql_query("commit");

?>
