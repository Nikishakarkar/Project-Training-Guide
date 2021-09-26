
<?php
include("header1.php");
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

	 $a = $_POST["pb"];
 
	$result = mysql_query("SELECT * FROM  project where Branch='$a'");
    $count = mysql_num_rows($result);
	 
	if($count >= 1)
	{
	  while($row = mysql_fetch_array($result))
	   {
	       $b = $row["Title"];
		   $c = $row["Abstract"];   
		   $e = $row["image"];
		   
 }
}


?>
<center>
<form action="updateproject.php"method="post" enctype="multipart/form-data">
<table width="612" height="177" border="1">
  <tr bgcolor="#009999">
    <td colspan="2" align="center" class="style4 style5">project</td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td width="279">Branch</td>
    <td width="276"><label for="textfield"></label>
    <input type="text" name="bc" id="bc" value="<?php echo $a; ?>" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Title</td>
    <td><label>
   <?php echo $b; ?>
    </label>      <label for="textfield"></label></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Abstract</td>
    <td><label></label>      
      <label>
     <input name="ac" type="textarea" id="ac" value="<?php echo $c; ?>" />
      </label>
      <label for="textfield"></label></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td colspan="2" align="center"><label for="Submit"></label>
    <input type="submit" name="Submit" value="Submit" id="Submit" /></td>
  </tr>
</table>
</form>
</center>
</body>
</html>
<?php include("footer.php"); ?>
