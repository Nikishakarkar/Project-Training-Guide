<?php include("header1.php");
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

	 $a = $_POST["pn"];
 
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
    <td colspan="2"><span class="style2">platformdetail</span></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td width="221">Name</td>
    <td width="222"><label for="textfield"></label>
    <?php echo $a; ?></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Email_id</td>
    <td><label for="label"></label>
    <input type="text" name="eid" id="eid" value="<?php echo $b; ?>" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Database</td>
    <td><label for="label2"></label>
	     <input name="db" type="textarea" id="db" value="<?php echo $c; ?>"/></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Description</td>
    <td><label for="label3"></label>
      <input type="text" name="dis" id="dis" value="<?php echo $d; ?>"/></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Software</td>
    <td><label for="textarea">
      <input type="text" name="soft" id="soft" value="<?php echo $e; ?>" />
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
<?php 
include("footer.php");
 ?>