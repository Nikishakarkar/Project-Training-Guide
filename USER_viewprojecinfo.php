
<?php

include("header.php");
include("sessionstart.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<center>
<form action="updateproject.php"method="post">
<table width="856" height="254" border="1">
  <tr bgcolor="#009999">
    <td height="132" colspan="3" align="center" class="style4 style5"><?php echo $_GET["branch"];?> project<img src="image/ab.jpg<?php echo $f;?>" width="159" height="165" />
  </tr>
  <tr bgcolor="#AEAEAE">
    <td width="279">Branch</td>
    <td width="279">Title</td>
    <td width="276"><label for="textfield">Abstract</label></td>
  </tr>
  
<?php
  
 
   
  mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");
	if(isset($_SESSION['emailid']))
	{
	

	 $a = $_GET["branch"];
 
	$result = mysql_query("SELECT * FROM  project where Branch='$a'");
    $count = mysql_num_rows($result);
	 
	if($count >= 1)
	{
	  while($row = mysql_fetch_array($result))
	   {   $a=$row["Branch"];
	       $c = $row["Title"];
		   $d = $row["Abstract"];   
		   $e=$row["image"]
 
   ?> 
   <tr bgcolor="#AEAEAE">
     <td><?php echo $a;?></td>
   <td><?php echo $c;?></td>
    <td><?php echo $d;?></td>
	 
	 </tr><?php
 }
}


?>
</table>
</form>
</center>
<?php }

else
{
header("location:login.php");

}
?>
<?php include("footer.php"); ?>
