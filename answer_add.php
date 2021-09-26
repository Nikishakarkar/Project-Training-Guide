<?php
 //  $a=$_POST["pid"]
	// echo $b=$_POST["type"];d
	echo $did = $_GET["did"];
	echo $type = $_GET["type"];
	echo $t = $_GET["title"];
	 echo $answer=$_POST["ans"];
	 
	 session_start();
	 echo $eid = $_SESSION['emailid'];
	// echo $e=$_POST["emailid"];
	
	mysql_connect("localhost","root","");
	
	if(mysql_select_db("trainingguide"))
	{
	
	}
	mysql_query("insert into answer (Type,d_id,Answer,Email_id) values('$type','$did','$answer','$eid')") or die(mysql_error());
	header("location:ans.php?title=".$t."&type=".$type."&id=".$did);
	
	mysql_query("commit");
 ?>



