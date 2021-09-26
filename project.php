<?php include("header1.php");
include("sessionstart.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style4 {
	color: #000000;
	font-weight: bold;
}
.style5 {font-size: 24px}
-->
</style>
<script language="javascript" type="text/javascript">

function validation()
{
	
	
	if(document.fd.bc.value == "")
	{
	alert("Please fill Branch field");
	return false;
	}
	else if(document.fd.pt.value == "")
	{
	alert("Please fill Platform field");
	return false;
	}
	else if(document.fd.tl.value == "")
	{
	alert("Please fill title");
	return false;
	}
	else if(document.fd.ac.value == "")
	{
	alert("Please fill Abstract");
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
<form action="pro1.php"method="post" enctype="multipart/form-data"name="fd" onsubmit="return(validation());">
<table width="612" height="177" border="1">
  <tr bgcolor="#009999">
    <td colspan="2" align="center" class="style4 style5">PROJECT</td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td width="279">Branch</td>
    <td width="276"><label for="textfield"></label>
      <select name="bc" id="bc">
        <option value="computer">computer</option>
        <option value="civil">civil</option>
        <option value="mechanical">mechanical</option>
        <option value="electrical">electrical</option>
        <option value="automobile">automobile</option>
        <option value="cddm">cddm</option>
      </select></td>
  </tr>
  
  
  
  
  <tr bgcolor="#AEAEAE">
    <td width="279">platform</td>
    <td width="276"><label for="textfield"></label>
      <select name="pt" id="pt">
        <option value="java">java</option>
        <option value="php">php</option>
        <option value="Android">Android</option>
        <option value="c++">c++</option>
      </select></td>
  </tr>
  
  
  
  
  <tr bgcolor="#AEAEAE">
    <td>Title</td>
    <td><label>
      <input name="tl" type="text" id="tl" />
    </label>      <label for="textfield"></label></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Abstract</td>
    <td><label></label>      
      <label>
      <textarea name="ac" id="ac"></textarea>
      </label>
      <label for="textfield"></label></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Image</td>
    <td><input type="file" name="file" /></td>
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