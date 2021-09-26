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
<?php

  
  mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");
	if(isset($_SESSION['emailid']))
	{
	
	  $a = $_GET["cname"];
 
	$result = mysql_query("SELECT * FROM  companydetail where Name='$a'");
    $count = mysql_num_rows($result);
	 
	if($count >= 1)
	{
	  while($row = mysql_fetch_array($result))
	   {
	       $b = $row["Email_id"];
		   $c = $row["Address"]; 
		   $d = $row["Contact"];
		   $e = $row["P_id"];	   
		   
 }
}
?>

<center>
<form action="updatecompany.php" method="post">
<table width="612" border="1">
  <tr align="center" bgcolor="#009999">
    <td height="32" colspan="2"><span class="style2">companydetail</span></td>
  </tr>
  
  
 <tr>
   <td colspan="2" align="left" valign="middle" bgcolor="#AEAEAE"><img src="image/a.jpg<?php echo $f;?>" width="159" height="165" /></td>
 </tr>
  
  
  
  <tr bgcolor="#AEAEAE">
    <td width="221">Name</td>
    <td width="222"><label for="textfield"></label>
   <?php echo $a; ?>   </td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Email_id</td>
    <td><label for="label"></label>
	<?php echo $b; ?></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Address</td>
    <td><label for="label2"></label>
	     <?php echo $c; ?>		 </td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Contact</td>
    <td><label for="label3"></label>
   <?php echo $d; ?>   </td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>P_id</td>
    <td><label for="textarea">
   <?php echo $e; ?>
    </label></td>
  </tr>
</table>
</form>
</center>

<?php }
else
{
header("location:login.php");
}
?>
<?php include("footer.php");
 ?>



