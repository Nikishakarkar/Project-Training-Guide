<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:94px;
	top:9px;
	width:959px;
	height:155px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:2px;
	top:3px;
	width:1117px;
	height:177px;
	z-index:1;
}
.style5 {font-size: 30px}
.style11 {
	font-size: 90px;
	color: #999999;
	font-weight: bold;
}
.style13 {font-size: 24px}
-->
</style>
</head>

<body>
  <table width="1254" height="162" border="0">
    <tr>
      <td height="110" colspan="10" bordercolor="#000000" bgcolor="#800080"><blockquote>
        <p class="style5"><span class="style11">Student Training Guide <span class="style13">
		<?php 
		session_start();
		error_reporting(1);
		if(isset($_SESSION['emailid']))
		{
		echo $_SESSION['emailid']; 
		?>
		<a style="color:#FFFFFF" href="sessiondestory.php">logout <?php } ?></a></span> </span></p>
      </blockquote>  
	      </td>
    </tr>
    <tr>
      <td width="140" bgcolor="#999999"><a href="admin_index.php">HOME</a></td>
      
      <td width="140" bgcolor="#999999"><a href="pro.php">PROJECT</a></td>
     
      <td width="140" bgcolor="#999999"><a href="plat.php">PLATFORM</a></td>
      <td width="140" bgcolor="#999999"><a href="com.php">COMPANY</a></td>

    </tr>
</table>

</body>
</html>
