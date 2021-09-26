<?php include("header1.php");
include("sessionstart.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {
	font-size: 24px;
	font-weight: bold;
	color: #000000;
}
-->
</style>

<script language="javascript" type="text/javascript">

function validation()
{
     var chr = /^[A-Za-z]+$/;
	 var dgt =   /^[0-9]+$/;
	var Email_id = document.fd.eid.value;
	atpos = Email_id.indexOf("@");
	dotposb= Email_id.lastIndexOf(".");
	
	if(document.fd.nm.value == "")
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
	else if(document.fd.add.value == "")
	{
	alert("Please fill Address");
	return false;
	}
	else if(document.fd.cont.value == "")
	{
	alert("Please fill Contact");
	return false;
	}
	else if(document.fd.cont.value.match(chr))
	{
	alert("Please Enter contact no in Digit");
	return false;
	}
	else if(document.fd.erno.value.length != 10)
	{
	alert("Please Enter 12 digit contact .no");
	return false;
	}
	else if(document.fd.pid.value == "")
	{
	alert("Please fill Project id");
	return false;
	}
	else if(document.fd.file.value == "")
	{
	alert("Please fill Image");
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
<form action="company1.php" method="post" enctype="multipart/form-data" name="fd" onsubmit="return(validation());">
<table width="612" border="1">
  <tr align="center" bgcolor="#009999">
    <td colspan="2"><span class="style2">COMPANY DETAIL </span></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td width="221">Name</td>
    <td width="222"><label for="textfield"></label>
      <input type="text" name="nm" id="nm" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Email_id</td>
    <td><label for="label"></label>
    <input type="email" name="eid" id="label" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Address</td>
    <td><label for="label2"></label>
      <textarea name="add" id="add"></textarea></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Contact</td>
    <td><label for="label3"></label>
      <input name="cont" type="text" id="label3" maxlength="10" /></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Project id </td>
    <td><label for="textarea">
      <input type="text" name="pid" id="label2" />
    </label></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Image</td>
    <td><input name="file" type="file" id="file" /></td>
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
<?php include("footer.php"); ?>
