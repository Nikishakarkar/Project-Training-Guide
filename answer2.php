<?php
include("header.php");
include("sessionstart.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #00CC33;
}
.style2 {
	font-size: 18px;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
.style4 {font-weight: bold}
.style6 {font-family: "Times New Roman", Times, serif}
.style7 {color: #3300FF}
-->
</style>
</head>
    <%
      //out.println(session.getAttribute("gid"));
    %>

<body>
	<?php
  
  mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");

    
	
	
	$id = $_GET["did"];
		$t = $_GET["type"];
	
	
	$result = mysql_query("SELECT * FROM  discussion where d_id='$id'");
    $count = mysql_num_rows($result);
	 
	if($count >= 1)
	{
	  while($row = mysql_fetch_array($result))
	   {    
	        $t = $row["title"];
		 $p = $row["post"];
		// $e = $row["Email_id"];
		 $gid=  $row["g_id"];
		}}
		?>   
	
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
<center><form action="../New folder/answer_add.php?did=<?php echo $id; ?>&amp;gid=<?php echo $gid; ?>" id="frmsignin" name="frmsignin" method="post" onsubmit="return validate()">

 
<table width="958" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="961" height="397">
	 <table width="955" border="0">
	    <!--DWLayoutTable-->
	    <tr>
	      <td height="22" colspan="2" background="../New folder/images/title.jpg"><span class="style4 style1">Discussion Forum</span> </td>
	   </tr>
	    <tr>
	      <td width="391" height="30"><span class="style6 style2">Discussion Title:  <?php echo $t ;?></span></td>
          </tr>
	    <tr>
	      <td height="31"> 
	        <label>Post:</label>
               <?php echo $p ;?></td>
          </tr>
	    <tr>
	      <td height="30">Answer:</td>
          </tr>
	    <tr>
	      <td height="42"> 
	        <label>
	        <textarea name="ans" cols="99" rows="7" id="ans"></textarea>
	        </label>	          </td>
          </tr>
	    <tr>
	      <td height="64" colspan="2"> 
	        <label>
	        <input type="submit" name="Submit" value="Add Answer" />
	        </label>
	        <input type="submit" name="Submit2" value="Cancle" />
	       
	          <label></label>           </td>
          </tr>
		  <?php
  
  mysql_connect("localhost","root","");
	
	mysql_select_db("trainingguide");

    
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
	      <td height="64" colspan="2"><span class="style7"><?php echo $emailid; ?></span></td>
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

<?php
include("footer.php");
?>