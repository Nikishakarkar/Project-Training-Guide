
<?php include("header.php"); 
include("sessionstart.php");?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php 
 $t = $_GET["title"];
 $tp = $_GET["type"];
 $did = $_GET["id"];


?>
<style type="text/css">
<!--
.style2 {
	font-size: 18px;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
.style6 {font-family: "Times New Roman", Times, serif}
.style7 {
	font-size: 18px;
	font-weight: bold;
}
.style9 {font-size: 24px; font-weight: bold; }
.style10 {color: #666666}
.style11 {color: #CCCCCC}
-->
</style>
</head>
 
<body> <bg color:99999 >
    <script language="javascript">
         function validate()
    {
        var title = document.frmsignin.title.value;
        var post = document.frmsignin.post.value;
         
		if(title == "")
	{
		document.frmsignin.title.focus();
                alert("Please Enter the title message...");
		return false;
	}
                if(post == "")
	{
		document.frmsignin.post.focus();
                alert("Please Enter the Post message...");
		return false;
	}
	}
    </script>
<center><form action="answer_add.php?did=<?php echo $did; ?>&type=<?php echo $tp; ?>&title=<?php echo $t; ?>" id="frmsignin" name="frmsignin" method="post" onsubmit="return validate()">

 <table width="958" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="961" height="397">
	 <table width="955" border="0">
	    <!--DWLayoutTable-->
	    <tr bgcolor="#02AEA6">
	      <td height="22" colspan="2" background="images/title.jpg"><span class="style9">Answer form :- </span></td>
	   </tr>
	    <tr bgcolor="#CC9933">
	      <td width="391" height="30"><span class="style7">Discussion type</span><strong>:</strong></td>
          </tr>
	    <tr  bgcolor="#669933">
	      <td height="31"><label><?php echo $tp?></label></td>
	      </tr>
	    <tr  bgcolor="#CC9933"">
	      <td height="31"><span class="style6 style2">Discussion Title:</span></td>
	      </tr>
	    <tr bgcolor="#669933">
	      <td height="31"> 
	        <label></label>	               <?php echo $t?></td>
          </tr>
	    <tr>
	      <td height="30"><span class="style2">Ans:</span></td>
          </tr>
	    <tr>
	      <td height="42"> 
	        <label>
	          <textarea name="ans" cols="99" rows="15" id="ans"></textarea>
	          </label>	          <p>&nbsp; </p></td>
          </tr>
	    <tr>
	      <td height="64" colspan="2"> 
	        <label>
	        <input type="submit" name="Submit" value="Add answer" />
	        </label>
	        <label>
	        <input type="submit" name="Submit2" value="Cancle" />
	        </label>
	        <div align="right"></div></td>
          </tr>
		  
  

    <?php
	mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");
	$result = mysql_query("SELECT * FROM  answer where d_id='$did'");
    $count = mysql_num_rows($result);
	 
	if($count >= 1)
	{
	  while($row = mysql_fetch_array($result))
	   {
	       $e_id = $row["Email_id"];
		   $an = $row["Answer"]; 
		  



?>

	    <tr bgcolor="#CC9933">
	      <td height="64" colspan="2"><span class="style10"><?php echo $e_id; ?></span></td>
	      </tr>
	    <tr bgcolor="#669933">
	      <td height="64" colspan="2"><span class="style10"><?php echo $an; ?></span></td>
	      </tr>
		  <?php }} ?>
        </table>
	
	
	
	</td>
  </tr>
</table>

</form>
</center>
</body>
</html>
<?php include("footer.php"); ?>

