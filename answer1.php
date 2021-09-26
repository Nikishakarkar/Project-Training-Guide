<?php

	 echo $a=$_POST["type"];
	 echo $b=$_POST["title"];
	 echo $c=$_POST["ans"];
	 
	
	mysql_connect("localhost","root","");
	
	if(mysql_select_db("trainingguide"))
	
	mysql_query("insert into answer(Type,Title,Answer) values('$a','$b','$c')") or die(mysql_error());
	
	
	mysql_query("commit");
 ?>


