<?php include("header1.php");
include("sessionstart.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {
	color: #000000;
	font-weight: bold;
	font-size: 24px;
}
.style7 {color: #000000}
-->
</style>


<script language="javascript" type="text/javascript">

function validation()
{

	
	if(document.fd.nm.value == "")
	{
	alert("Please fill name field");
	return false;
	}
	else if(document.fd.eid.value == "")
	{
	alert("Please fill Website");
	return false;
	}
	
	else if(document.fd.db.value == "")
	{
	alert("Please fill Database");
	return false;
	}
	else if(document.fd.dis.value == "")
	{
	alert("Please fill project Description");
	return false;
	}
	else if(document.fd.soft.value == "")
	{
	alert("Please fill Software");
	return false;
	}
	else if(document.fd.file.value == "")
	{
	alert("Please fill image");
	return false;
	}
	
	
	return true;
}

</script>




</head>
<body>
<center>
<form action="platform1.php" method="post" enctype="multipart/form-data"name="fd" onsubmit="return(validation());">
<table width="612" border="1">
  <tr align="center">
    <td colspan="2" valign="top" bordercolor="#000000" bgcolor="#009999"><span class="style5">PLATFORM DETAIL</span> </td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td width="298">Name<span class="style7"></span></td>
    <td width="298"><label for="textfield"></label>
      <label>
      <select name="nm" id="nm">
        <option value="java">java</option>
        <option value="android">android</option>
        <option value="php">php</option>
        <option value=".net">.net</option>
        <option value="c++">c++</option>
      </select>
      </label></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Website </td>
    <td><label for="label"></label>
      <input type="text" name="eid" id="label" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Database</td>
    <td><label for="label2"></label>
      <label for="label2"></label>
    <textarea name="db" id="label2"></textarea></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Description</td>
    <td><label for="textarea"></label>
      <textarea name="dis" id="dis"></textarea></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Software</td>
    <td><label for="label3"></label>
      <input name="soft" type="text" id="label3" value="" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Image </td>
    <td><input type="file" name="file" /></td>
  </tr>
  <tr align="center" bgcolor="#AEAEAE">
    <td colspan="2"><label for="label3"></label>
      <label for="Submit"></label>
      <input type="submit" name="Submit" value="Submit" id="Submit" />
      <label for="label3"></label></td>
    </tr>
</table>
</form>
</center>
</body>
</html>
<?php include("footer.php");
 ?>