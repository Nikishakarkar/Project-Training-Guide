<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {color: #C0C0C0}
-->
</style>
</head>

<body>
<center>
<form action="answer1.php" method="post">
<table width="518" height="138" border="1">
  <tr>
    <td colspan="2"><div align="center">Answer</div></td>
  </tr>
  <tr>
    <td width="217">Type</td>
    <td width="285">&nbsp;</td>
  </tr>
  <tr>
    <td>d_id</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Answer</td>
    <td><textarea name="ans" rows="10" id="ans"></textarea></td>
  </tr>
  <tr>
    <td>Email_id</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="right">
      <input type="submit" name="Submit" value="Submit" />
    </div></td>
  </tr>
     </tr>
		  <?php
  
  mysql_connect("localhost","root","");
	
	mysql_select_db("gtu student portal");

    
	$result1 = mysql_query("SELECT * FROM  answer where d_id='$id'");
    $count1 = mysql_num_rows($result1);
	 
	if($count1 >= 1)
	{
	  while($row = mysql_fetch_array($result1))
	   {    
	        $answer = $row["ans"];
		 $emailid = $row["email_id"];
		 
		
	
		?>   
	    <tr bgcolor="#999966">
	      <td height="64" colspan="2"><span class="style7 style2"><?php echo $emailid; ?></span></td>
      </tr>
	    <tr>
	      <td height="64" colspan="2"><?php echo $answer; ?></td>
	      </tr>
		  <?php 	}}?>
        </table>
		
	
	
	
	</td>
  </tr>
</table>
</form>
</center>
</body>
</html>
