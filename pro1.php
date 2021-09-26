<?php
    $a=$_POST["bc"];
	 $b=$_POST["pt"];
	$c=$_POST["tl"];
	$d=$_POST["ac"];
		$e=$_FILES["file"]["name"];
	mysql_connect("localhost","root","");
	
	if(mysql_select_db("trainingguide"))
	{
	echo "a";
	}
	if(mysql_query("insert into project values('$a','$b','$c','$d','$e')"))
	{
	move_uploaded_file($_FILES["file"]["tmp_name"], "profile/" . $_FILES["file"]["name"]);
	header("location:message1.php?msg=*****WELCOME*****Successfully Login in project... ");
	}
	
	else
	{
	header("location:message.php?msg=You are already register.. ");
	}
	
	
	mysql_query("commit");
?>


