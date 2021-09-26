

<?php include("header.php");
include("sessionstart.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #990099}
-->
</style>
<script language="javascript" type="text/javascript">

function validation()
{
	var Email_id = document.fd.emailid.value;
	atpos = Email_id.indexOf("@");
	dotposb= Email_id.lastIndexOf(".");
	
	if(document.fd.type.value == "")
	{
	alert("Please fill Type");
	return false;
	}
	else if(document.fd.title.value == "")
	{
	alert("Please fill Title");
	return false;
	}
	else if(document.fd.post.value == "")
	{
	alert("Please fill Post");
	return false;
	}
	else if(document.fd.emailid.value == "")
	{
	alert("Please fill Email id");
	return false;
	}
	
	else if(atpos < 1 || (dotpos - atpos < 2))
	{
		alert("Please enter valid Email id");
		
		return false;
	}
	return true;
}

</script>
</head>

<body>
<center>
<form action="discussion2.php" method="post" name="fd" onsubmit="return(validation());">
<table width="639" border="1">
  <tr>
  <tr bgcolor="#009999">
    <td colspan="2"><blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <p>Discussion</p>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote></td>
  </tr>
  <tr>
     <tr bgcolor="#AEAEAE">
    <td width="310">Type</td>
    <td width="336"><select name="type" id="type">
      <option value="Project">Project</option>
      <option value="Company">Company</option>
      <option value="Platform">Platform</option>
    </select></td>
  </tr>
  <tr><tr bgcolor="#AEAEAE">
    <td>Title</td>
    <td><input name="title" type="text" id="title" /></td>
  </tr>
  <tr><tr bgcolor="#AEAEAE">
    <td>Post</td>
    <td><input name="post" type="text" id="post" /></td>
  </tr>
  <tr><tr bgcolor="#AEAEAE">
    <td>Email_id</td>
    <td><input name="emailid" type="text" id="emailid" /></td>
  </tr>
  <tr><tr bgcolor="#AEAEAE">
    <td colspan="2"><blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <p>
                    <input type="submit" name="Submit" value="Submit" />
                  </p>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote></td>
  </tr>
</table>
</form>
</center>
</body>
</html>
<?php include("footer.php"); ?>