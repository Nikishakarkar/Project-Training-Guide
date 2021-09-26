<?php

$eid = $_POST["uname"];
$password = $_POST["pass"];

session_start();


       if($eid != "admin@tr.com" && $password != "admin")
	   {

    mysql_connect("localhost","root","");
	mysql_select_db("trainingguide");
	    $result = mysql_query("SELECT * FROM  studentregistration where Email_id='$eid' and Password='$password'");
	    $count = mysql_num_rows($result);
	
	 if($count >= 1)
	   {
	 
           $_SESSION['emailid']= $eid; 
	           echo "successfully user login......";
	           echo $eid;
	    header("location:viewprofile.php");
	   }
	else
	   {
	          echo "invalid user name or password";
	   }
}
else
{
$_SESSION['emailid']= $eid; 
header("location:admin_index.php");

}

?>