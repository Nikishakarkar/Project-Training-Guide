<?php 
include("header.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #00CC00;
	font-size: 18px;
}
.style2 {color: #999900}
-->
</style>
</head>

<body>
<script language="JavaScript" type="text/javascript">
 
</script>

<center>
    <form id="frmsignin" name="frmsignin" method="post" action="fpsinsert.php"   >
<table width="960" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="262" height="50">&nbsp;</td>
    <td width="445">&nbsp;</td>
    <td width="253">&nbsp;</td>
  </tr>
  <tr>
    <td height="261">&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="445" height="261"><table width="445" height="170" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th height="24" colspan="3" background="images/title.jpg" scope="col"><div align="left" class="style1 style2">We will Help to You Sign in to Gtu Student Portal </div></th>
            </tr>
          <tr>
            <td width="173" height="64"><div align="right">Email id </div></td>
            <td width="15">:</td>
            <td width="235"> 
              <label>
                <input name="email" type="text" id="email" />
                </label>            </td>
          </tr>
          <tr>
          <tr>
            <td height="64"><div align="right">Birthdate</div></td>
            <td>:</td>
            <td><label>
              <input name="bdate" type="text" id="bdate" />
              </label>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td> 
              <label>
                <input type="submit" name="Submit" value="submit" />
                </label>
              <label>
              <input type="submit" name="Submit2" value="Cancel" />
              </label>            </td>
          </tr>
        </table></td>
        </tr>
    </table></td>
    <td><p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="85">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
        </form>
</center>
</body>
</html>
<?php 
include("footer.php")
?>
