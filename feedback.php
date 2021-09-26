<?php include("header.php");
include("sessionstart.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
<script language="javascript" type="text/javascript">

function validation()
{     var chr = /^[A-Za-z]+$/;
	 var dgt =   /^[0-9]+$/;
	var Email_id = document.fd.eid.value;
	atpos = Email_id.indexOf("@");
	dotposb= Email_id.lastIndexOf(".");
	
	if(document.fd.name.value == "")
	{
	alert("Please fill name field");
	return false;
	}
	else if(document.fd.nm.value.match(dgt))
	{
	alert("Please Enter Character");
	return false;
	}
	else if(document.fd.eid.value == "")
	{
	alert("Please fill Email id");
	return false;
	}
	else if(document.fd.pid.value == "")
	{
	alert("Please fill project name");
	return false;
	}
	else if(document.fd.des.value == "")
	{
	alert("Please fill Discription");
	return false;
	}
	
	else if(atpos < 1 || (dotpos - atpos < 2))
	{
		alert("Please enter valid email id");
		
		return false;
	}
	return true;
}

</script>
</head>
<body>
<center>
  <form action="feedback1.php" method="post" name="fd" onsubmit="return(validation());">
<table width="612" border="1">
  <tr align="center" bgcolor="#009999">
    <td colspan="2"><span class="style2">FEEDBACK</span></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td width="298">Name</td>
    <td width="298"><label for="textfield"></label>
      <input type="text" name="name" id="name" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Email id </td>
    <td><label for="label"></label>
      <label for="textfield"></label>
      <input type="email"name="eid" id="eid" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Project Name</td>
    <td><label for="label2"></label>
      <input type="text" name="pid" id="label2" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Description</td>
    <td><label for="textarea"></label>
      <textarea name="des" id="des"></textarea></td>
  </tr>
  <tr align="center" bgcolor="#AEAEAE">
    <td colspan="2"><label for="Submit"></label>
    <input type="submit" name="Submit" value="Submit" id="Submit" /></td>
  </tr>
</table>
</form>
</center>
</body>
</html>
<?php include_once("footer.php"); ?>