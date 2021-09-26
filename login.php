<?php

include("header.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><center>
<title>login  page</title>
<style type="text/css">
<!--
.style2 {
	font-family: "Times New Roman", Times, serif;
	font-size: 16px;
}
.style3 {color: #F0F0F0}
.style4 {font-size: 18px; font-weight: bold; font-family: "Times New Roman", Times, serif;}
-->
</style>
</head>

<script language="javascript">
        function login()
        {
            if(document.forms[0].username.value==""||document.forms[0].password.value=="")
            {
                alert("Username or Password not specified.");
            }
            else
            {
                document.forms[0].action="checklogin.php";
            }
        }
    </script>

<body bgcolor="#AEAEAE" >
<center class="style3">
<form method="post" action="checklogin.php">
<table width="1066" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="618" height="25">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td width="27">&nbsp;</td>
    <td width="311">&nbsp;</td>
    <td width="39">&nbsp;</td>
  </tr>
  <tr>
    <td height="254" align="center" >
<?php include("animation.php"); ?></td>

    <td align="center" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="365" height="208" valign="top" >                        
		 
		 <form action="checklogin.php" method="post">
		  
		   <table width="390" border="1" align="center">
  <tr align="center">
    <td height="248"><img src="image/login.jpg"   /></td>
  </tr>
  
</table>

	<?php
	 session_start(); 
	if(!isset($_SESSION['emailid']))
	{?>
  <table width="394" height="142" border="1">
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
    <tr> </tr>
    <tr bgcolor="#AEAEAE">
      <td><a href="student.php">Sign up</a> </td>
      <td><a href="forgotpass.php">Forgot password</a> </td>
    </tr>
	</table>
	<?php }
	
	else
	{
	?>
	<table width="394" height="142" border="1" background="login.jpg">
		</table>
	<?php
	}  
  
 ?>
</form>

        <td width="11">              </tr>
    </table>    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">
     
	  <table width="619" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="22" bgcolor="#CC3366" align="center" ><span class="style4">News and Update</span> </td>
        </tr>
        <tr>
          <td> 
		  <marquee onmouseover=stop() style="height: 250px" onmouseout=start() scrollAmount=1 scrollDelay=1 direction=up>
                            <table height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <tbody><tr><td >
                                             
                                               <a href="http://www.gtu.ac.in" target="_blank"> Welcome to Website of student training guide</a><br><br>
												<a href="http://www.iwillstudy.com" target="_blank">Latest Event</a><br><br>
												<a href="http://www.apple.com" target="_blank">Iphone4s demo</a> <br><br>
												 <a href="http://techno-angel.blogspot.in/" target="_blank">new Technology</a> <br><br>
											     <a href="http://dailytechnoapps.blogspot.in/" target="_blank">latest Technology</a> <br><br>

                </table>
                        </marquee></td>
        </tr>
      </table>	</td>
    <td height="22">&nbsp;</td>
    <td rowspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td   class="style4" bgcolor="#CC3366" align="center" >Blogs</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="218">&nbsp;</td>
    <td valign="top" ><table width="312" border="0">
      <tr>
        <th width="302" height="34"  scope="col"><a href="http://iphonedevelopment.blogspot.in/"><img src="image/blog/androids.jpg" alt="android" width="208" height="51" border="0" /></a><a href="http:sukhadiyaraviraj.blogspot.com"></a></th>
      </tr>
      <tr>
        <td height="42"> <div align="center"><a href="http://iphonedevelopment.blogspot.in/"><img src="image/blog/ipohnes.jpg" width="208" height="51" border="0" /></a></div></td>
      </tr>
      <tr>
        <td height="36"><div align="center"><a href="http://extreme-java.blogspot.in/"><img src="image/blog/javajpg.jpg" width="288" height="47" longdesc="http://extreme-java.blogspot.in/" /></a></div> </td>
      </tr>
      <tr>
        <td height="47"><div align="center"><a href="http://advancedcppwithexamples.blogspot.in/"><img src="image/blog/candcpp.jpg" width="206" height="43" /></a></div></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</center>
</body>
</html> 
<?php 
  include("footer.php");
?>
