
<?php 
include("header1.php");    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
.style2 {color: #000000}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Edit company name </title>
 <link rel="stylesheet" type="text/css" href="titlefont.css"/>
</head>
<body>
<center>
<form action="viewupdatecompany.php" method="post">
<table width="341" border="1">
<tr>
    <td colspan="2" align="center" background="images/title.jpg"><span class="style2">Edit Company Detail </span></td>
</tr>
  <tr>
    <td width="171">Company name </td>
    <td width="154"><label>
    <select name="cn" id="cn">
      <?php
  mysql_connect("localhost","root","");
	if(mysql_select_db("trainingguide"))
	{
	}
     $result = mysql_query("SELECT * FROM  companydetail");
	 $count = mysql_num_rows($result);
	$c = 0;
	if($count >= 1)
	{
	  while($row = mysql_fetch_array($result))
	   {
	   ?>
      <option value="<?php  echo $row["Name"];?>">
      <?php  echo $row["Name"];?>
      </option>
      <?php }
}
?>
    </select>
    </label></td>
  </tr>
  <tr>
  <td colspan="2" align="center"> <label>
    <input type="submit" name="Submit" value="Submit" />
  </label></td>
  </tr>
</table>
</form>
</center>
</body>
</html>
<?php
 include("footer.php");
 ?>
