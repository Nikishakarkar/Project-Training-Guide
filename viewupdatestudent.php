
<?php include("header.php"); 
include("sessionstart.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #000000}
-->
</style>
</head>

<body>
<?php
  
  mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");

	$eid = $_SESSION['emailid'];
 
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

<form action="updatestudentprofile.php" method="post" enctype="multipart/form-data">
<table width="485" height="371" border="1" align="center" bgcolor="#F0F0F0">
  <tr align="center" bgcolor="#5282b1">
    <td height="41" colspan="2" valign="middle" bgcolor="#009999"><span class="style1">studentregistration</span></td>
  </tr>
  <tr>
    <td width="169" align="left" valign="middle" bgcolor="#AEAEAE"><span class="style2">Name</span></td>
    <td width="300" align="left" valign="middle" bgcolor="#AEAEAE"><span class="style1">
      <label>
        <input name="nm" type="text" id="nm" value="<?php echo $a; ?>" />
        </label>
    </span></td>
  </tr>
   <tr>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style2">Gender</span></td>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><p class="style1">
     
      <label>
      <select name="rd" id="rd">
        <option value="<?php echo $b; ?>"><?php echo $b; ?></option>
		<option value="male">male</option>
        <option value="female">female</option>
      </select>
      </label>
      <br />
      <label></label>
      <br />
    </p></td>
  </tr>
 <tr>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style2">Birthdate</span></td>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style1">
      <label>
        <input name="bd" type="text" id="bd" value="<?php echo $c; ?>" />
        </label>
    </span></td>
 </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style2">Address</span></td>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style1">
      <label>
        <input name="add" type="textarea" id="add" value="<?php echo $d; ?>"/>
        </label>
    </span></td>
  </tr>
   <tr>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style2">Email_id</span></td>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style1">
      <label>
        <input name="eid" type="text" id="eid" value="<?php echo $eid; ?>"/>
        </label>
    </span></td>
   </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style2">Password</span></td>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style1">
      <label>
        <input name="pass" type="password" id="pass" value="<?php echo $f; ?>"/>
        </label>
    </span></td>
  </tr>
  
  
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style2">Er_no</span></td>
    <td align="left" valign="middle" bgcolor="#AEAEAE"><span class="style1">
      <label>
        <input name="er" type="text" id="er"  value="<?php echo $g; ?>"/>
        </label>
    </span></td>
  </tr>  <tr>
      <td align="left" valign="middle" bgcolor="#AEAEAE">change profile </td>
      <td align="left" valign="middle" bgcolor="#AEAEAE"><input name="file1" type="file" id="file1" /></td>
    </tr>
 
  <tr>
    <td height="38" colspan="2" align="right" valign="middle" bgcolor="#AEAEAE"><span class="style1">
      <label>
        <input type="submit" name="Submit" value="Submit" />
        </label>
    </span></td>
  </tr>
</table>
</form>
</body>
</html>
<?php include("footer.php"); 
?>