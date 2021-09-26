<?php 

include("header.php");
include("sessionstart.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
   
  mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");
	if(isset($_SESSION['emailid']))
	{
		 $a = $_GET["platform"];
 
	$result = mysql_query("SELECT * FROM  platformdetail where Name='$a'");
    $count = mysql_num_rows($result);
	 
	if($count >= 1)
	{
	  while($row = mysql_fetch_array($result))
	   {
	       $b = $row["Email_id"];
		   $c = $row["Database"]; 
		   $d = $row["Description"];
		   $e = $row["Software"];	   
		  
 }
}


?>

<center>
<form action="updateplatform.php" method="post">
<table width="612" border="1">
  <tr align="center" bgcolor="#009999">
    <td height="50"><img src="image/p.jpg<?php echo $f;?>" width="159" height="165" /></td>
    <td height="50"><?php echo $a; ?></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td width="221">Name</td>
    <td width="222"><label for="textfield"></label>
    <?php echo $a; ?></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Website</td>
    <td><label for="label"></label>
 <?php echo $b; ?></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Database</td>
    <td><label for="label2"></label>
	   <?php echo $c; ?></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Description</td>
    <td><label for="label3"></label>
 <?php echo $d; ?></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Software</td>
    <td><label for="textarea">
     <?php echo $e; ?>
    </label></td>
  </tr>
  <tr align="center" bgcolor="#AEAEAE">
    <td colspan="2"><label for="Submit"></label></td>
  </tr>
</table>
<table width="611" border="1">
  <tr>
    <td colspan="3">Available Project </td>
    </tr>
  <tr>
    <td width="63">Branch</td>
    <td width="39">Title</td>
    <td width="279">Abstract</td>
  </tr>
  <?php 
  $result1 = mysql_query("SELECT * FROM  project where platform='$a'");
    $count1 = mysql_num_rows($result1);
	 
	if($count1 >= 1)
	{
	  while($row = mysql_fetch_array($result1))
	   {
	       $b = $row["Branch"];
		   $c = $row["Title"]; 
		   $d = $row["Abstract"];
		    $f= $row["image"];  
		   
 ?>
  <tr>
    <td><?php echo $b; ?></td>
    <td><?php echo $c; ?></td>
    <td><?php echo $d; ?></td>
	 
  </tr>
  <?php }}?>
</table>
<p>&nbsp;</p>
</form>
</center>
<?php }

else
{
header("location:login.php");

}
?>
<?php 
include("footer.php");
 ?>



