
<?php 
include("header.php");    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
.style2 {color: #000000}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Edit discussion </title>
 <link rel="stylesheet" type="text/css" href="titlefont.css"/>
</head>
<body>
<center>
 <form action="viewupdatediscussion.php" method="post">
<table width="341" border="1">
<tr>
    <td colspan="2" align="center" background="images/title.jpg">Discussion</td>
</tr>
  <tr>
    <td width="171">Type</td>
    <td width="154"><label>
    <select name="select" id="select">
      <option value="Project">Project</option>
      <option value="Company">Company</option>
      <option value="Platform">Platform</option>
    </select>
    </label></td>
  </tr>
  <tr>
  <td colspan="2" align="center"> <label>
    <input type="submit" name="Submit" value="Submit" />
  </label></td>
  </tr>
</table>
</form>
</center>
</body>
</html>
<?php
 include("footer.php");
 ?>
