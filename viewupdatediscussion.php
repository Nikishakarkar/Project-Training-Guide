<?php include("header.php");
include("sessionstart.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #fffff;
	font-weight: bold;
	font-size: 36px;
}
.style2 {font-size: 18px}
-->
</style>
</head>
<body>



<center>
<form action="updatediscussion.php" method="post">
<table width="612" border="1">
  
  <?php
  
  mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");
    $b = $_POST["select"];
	?>
 <tr align="center" bgcolor="#009999">
    <td colspan="2"><span class="style2"><?php echo $b;?>  Discussion</span></td>
  </tr>
  <?php
	$result = mysql_query("SELECT * FROM  discussion where Type='$b'");
    $count = mysql_num_rows($result);
	 
	if($count >= 1)
	{
	  while($row = mysql_fetch_array($result))
	   {
	       $a = $row["P_id"];
		   $c = $row["Title"]; 
		   $d = $row["Post"];
		   $e = $row["Email_id"];	   



?>
 

  <tr bgcolor="#AEAEAE">
     
    <td colspan="2"><span class="style1">
      <label for="label2"><a href="ans.php?title=<?php echo $c; ?>&type=<?php echo $b; ?>&id=<?php echo $a; ?>"><?php echo $c; ?> </a><?php echo $e; ?></label>
     </span></tr>
  <tr bgcolor="#AEAEAE">
    <td>Post</td>
    <td><label for="label3"><?php echo $d; ?></label>  </tr>

  <?php
  		   
 }
}
?>
</table>
</form>
</center>
</body>
</html>
<?php include("footer.php"); ?>



