<?php include("header.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>hjhj Document</title>
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
	else if(document.fd.rd.value == "")
	{
	alert("Please fill Website");
	return false;
	}
	
	else if(document.fd.bd.value == "")
	{
	alert("Please fill Birthdate");
	return false;
	}
	else if(document.fd.add.value == "")
	{
	alert("Please fill Address");
	return false;
	}
	else if(document.fd.eid.value == "")
	{
	alert("Please fill Email id");
	return false;
	}
	else if(document.fd.pass.value == "")
	{
	alert("Please fill Password");
	return false;
	}
	else if(document.fd.er.value == "")
	{
	alert("Please fill Ee_no");
	return false;
	}
	else if(document.fd.erno.value.match(chr))
	{
	alert("Please Enter Er no in  Digit");
	return false;
	}
	else if(document.fd.erno.value.length != 12)
	{
	alert("Please Enter 12 digit ER .no");
	return false;
	}
	else if(document.fd.file.value == "")
	{
	alert("Please fill Profile");
	return false;
	}else if(atpos < 1 || (dotpos - atpos < 2))
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
<form action="reg.php" method="post" enctype="multipart/form-data"name="fd" onsubmit="return(validation());">
<table width="612" border="1">
  <tr align="center" bgcolor="#009999">
    <td colspan="2"><span class="style2">STUDENT REGISTRATION </span></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td width="147">Name</td>
    <td width="449"><label for="textfield"></label>
    <input type="text" name="nm" id="nm" /></td>
  </tr>
  
  <tr bgcolor="#AEAEAE">
<td>Gender</td>
    <td>
      <label for="select"></label>
      <label>
      <select name="rd" size="1" id="rd">
        <option value="male">male</option>
        <option value="female">female</option>
      </select>
      </label></td>
  </tr>
  <tr bgcolor="#AEAEAE">
    <td>Birthdate</td>
    <td><label for="label4"></label>
    <input type="text" name="bd" id="label4" /></td>
  </tr>
  
  <tr bgcolor="#AEAEAE">
  <td>Address</td>
    <td><label>
      <textarea name="add" id="add"></textarea>
    </label></td>
	</tr>
  <tr bgcolor="#AEAEAE">
    <td>Email id </td>
    <td>
    <input type="email" name="eid" /></td>
  </tr>
  
  <tr bgcolor="#AEAEAE">
    <td>Password</td>
    <td><input type="password" name="pass" /></td>
  </tr>
  
    <tr bgcolor="#AEAEAE">
    <td>Er_no </td>
    <td><label for="label5"></label>
      <input name="er" type="text" id="label5" maxlength="12" /></td>
  </tr>
    <tr bgcolor="#AEAEAE">
      <td>Profile </td>
      <td><input type="file" name="file" /></td>
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