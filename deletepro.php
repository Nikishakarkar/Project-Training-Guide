<?php
    $a=$_POST["cn"];
	 

    mysql_connect("localhost","root","");

    echo $a;
    mysql_select_db("trainingguide");


    mysql_query("delete * from project") or die("errorrrrrr");  


	mysql_query("commit");


	//header("location:message.php?msg=Successfully delete college profile.... ");
?>