
<?php
include("header.php");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="checklogin.php">

<table width="394" height="142" border="1" align="center">
    <tr align="center" bgcolor="#009999">
      <td height="23" colspan="2"><div align="center">login </div></td>
    </tr>
    <tr> </tr>
    <tr bgcolor="#AEAEAE">
      <td width="98">email id </td>
      <td width="144"><input name="uname" type="email" id="uname" /></td>
    </tr>
    <tr> </tr>
    <tr bgcolor="#AEAEAE">
      <td>password</td>
      <td><input name="pass" type="password" id="pass" /></td>
    </tr>
    <tr> </tr>
    <tr bgcolor="#AEAEAE">
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="login" /></td>
    </tr>
    
    
	
</table>
</body>
</html>
<?php
include("footer.php");
?>
