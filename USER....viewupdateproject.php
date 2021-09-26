
<?php
include("header.php");
include("sessionstart.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="200" border="1" align="center">
  <tr><tr  bgcolor="#009999">
    <td>Branch</td>
  </tr></tr>
<?php
  
  mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");


 
	$result = mysql_query("SELECT * FROM  branch");
    $count = mysql_num_rows($result);
	 
	if($count >= 1)
	{
	  while($row = mysql_fetch_array($result))
	  {
	  	 $a= $row["Name"];
	   ?>
	     <tr><tr bgcolor="#AEAEAE">
   			 <td>
			 <a href="USER_viewprojecinfo.php?branch=<?php echo $a; ?>"><?php echo $a; ?></a></td>
  		</tr></tr>
		<?php	
		}
		}
?>   
</center>

</table>
</body>
</html>
<?php include("footer.php"); ?>
