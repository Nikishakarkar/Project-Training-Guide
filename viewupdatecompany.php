<?php
 include("header1.php");
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

	 $a = $_POST["cn"];
 
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
    <td colspan="2"><span class="style2">companydetail</span></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td width="221">Name</td>
    <td width="222"><label for="textfield"></label>
    <?php echo $a; ?></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Email_id</td>
    <td><label for="label"></label>
    <input type="text" name="eid" id="label" value="<?php echo $b; ?>" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Address</td>
    <td><label for="label2"></label>
	     <input name="add" type="textarea" id="add" value="<?php echo $c; ?>"/></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Contact</td>
    <td><label for="label3"></label>
      <input type="text" name="cont" id="label3" value="<?php echo $d; ?>"/></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>P_id</td>
    <td><label for="textarea">
      <input type="text" name="pid" id="label2" value="<?php echo $e; ?>" />
    </label></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit" />
    </div></td>
    </tr>
</table>
</form>
</center>
</body>
</html>
<?php include("footer.php"); ?>



