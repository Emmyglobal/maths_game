
<?php
	mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
	mysql_select_db("search") or die(mysql_error());
	if(isset($_POST['Submit2'])){
		$topic = $_POST['topic'];
		$comment = $_POST['post'];
		$posts = mysql_real_escape_string(htmlspecialchars($comment));
		$qq = "INSERT INTO searchtb(title,text) VALUES('$topic','$posts')";
		if(mysql_query($qq)){
			echo "<script>alert('Successful');</script>";
		}
		else{
			echo "<script>alert('UNSUCCESSFUl');</script>";
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CONTACT US</title>
<style type="text/css">
<!-- css codings
.style2 {
	font-size: 36px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #9999FF;
}
.style6 {
	color: #9966FF;
	font-size: 36px;
}
.style7 {color: #FFFFFF}
.style8 {font-family: "Times New Roman", Times, serif}
.style9 {color: #0066FF}
.style10 {font-size: 36px}
a:link {
	color: #CCCCCC;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style12 {font-size: 10px}
.style13 {color: #0000FF; font-size: 36px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style14 {color: #0000FF}
-->
</style></head>

<body bgcolor="grey">
<table border="2" width="1300" align="center">
  <tr>
    <td align="center" valign="middle" bgcolor="#993366">
      <h1 align="left" class="style2 style6"><img src="LOG.png" alt="logo here" width="555" height="81" /></h1>
      <span class="style8"><span class="style9">MOTTO</span>: <span class="style7">MODEL OF DIGNITY</span></span> <br />
      <table width="1108">
        <tr>
          <td align="center"><span class="style14"><a href="index.php">HOME</a></span></td>
          <td align="center"><span class="style14"><a href="add.php">ADD YOUR BUSSINESS</a> </span></td>
          <td align="center"><span class="style14"><a href="search.php">SEARCH FOR ADDRESS</a> </span></td>
          <td align="center"><span class="style14"><a href="advert.php">ADVERTISE HERE</a></span></td>
          <td align="center"><span class="style14"><a href="contact.php">CONTACT US</a> </span></td>
          <td align="center"><span class="style14"><a href="about.php">ABOUT US</a> </span></td>
        </tr>
      </table>
    <br /></td>
  </tr>
  <tr>
    <td height="1056" align="center" valign="top" bgcolor="#999999"><p>&nbsp;</p>
      <strong><marquee>
      </marquee></strong>
      <p>&nbsp;</p>
    </td>
  </tr>
</table>

</body>
</html>
