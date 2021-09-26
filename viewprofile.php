
<?php include("header.php");
 include("sessionstart.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #000000}
.style3 {color: #660099}
-->
</style>
</head>

<body>
<?php
  //session_start();
  
  mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");

	 $eid = $_SESSION['emailid'];
	 
	 
	  if($_SESSION['emailid'])
 {
	$result = mysql_query("SELECT * FROM  studentregistration where Email_id='$eid'");
    $count = mysql_num_rows($result);
	 
	if($count >= 1)
	{
	  while($row = mysql_fetch_array($result))
	   {
	       $a = $row["Name"];
	       $b = $row["Gender"];
		   $c = $row["Birthdate"];
		   $d = $row["Address"]; 
		  // $e = $row["Email_id"];
		   $f = $row["Password"];
		   $g = $row["Er_no"];
		   $h = $row["image"];
 }
}
?>

<form action="updatestudentprofile.php" method="post">
<table width="485" height="382" border="1" align="center" bgcolor="#F0F0F0">
  <tr align="center" bgcolor="#5282b1">
     		<td height="53" colspan="2" valign="middle" bgcolor="#009999"><div align="center"><span class="style1">studentregistration</span></div>
      <div align="right"><span class="style1"><a href="viewupdatestudent.php">Edit Profile</a></span></div></td>
	</tr>
	
	
	
	<tr>
    <td colspan="2" align="left" valign="middle" bgcolor="#AEAEAE"><img src="profile/<?php echo $h;?>" width="159" height="165" /></td>
  </tr>
  
  
  
  <tr>
    		<td width="250" align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">Name</span></td>
    		<td width="219" align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">
 <label>
 <?php echo $a; ?>      </label>
    </span></td>
  </tr>
   <tr>
    		<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">Gender</span></td>
    		<td align="left" valign="middle" bgcolor="#AEAEAE"><p class="style3">
     
<label>
<?php echo $b; ?>      </label>
      <br />
      <label></label>
      <br />
    </p></td>
  </tr>
 <tr>
    		<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">Birthdate</span></td>
    		<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">
<label>
<?php echo $c; ?>      </label>
    </span></td>
 </tr>
  <tr>
   			<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">Address</span></td>
    		<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">
<label>
<?php echo $d; ?>      </label>
    </span></td>
  </tr>
   <tr>
			<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">Email_id</span></td>
			<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">
<label>
<?php echo $eid; ?>	</label>
    </span></td>
   </tr>
  <tr>
    		<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">Password</span></td>
    		<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">
 <label>
 <?php echo $f; ?>    </label>
    </span></td>
  </tr>
  
  
    		<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">Er_no</span></td>
    		<td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style3">
 <label>
<?php echo $g; ?>    </label>
    </span></td>
  </tr>
</table>
</form>
</body>
</html>
<?php }

else
{
header("location:login.php");

}
?>
<?php include("footer.php"); 
?>