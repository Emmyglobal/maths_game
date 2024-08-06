<?php require_once('Connections/demark.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO addtb (company, address, products, email, phone) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['post2'], "text"),
                       GetSQLValueString($_POST['post3'], "text"),
                       GetSQLValueString($_POST['post4'], "text"),
                       GetSQLValueString($_POST['post5'], "text"),
                       GetSQLValueString($_POST['post6'], "int"));

  mysql_select_db($database_demark, $demark);
  $Result1 = mysql_query($insertSQL, $demark) or die(mysql_error());
}

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

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADD PAGE</title>
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
.style13 {
	font-family: "Courier New", Courier, monospace;
	color: #FFFFFF;
	font-size: 36px;
}
.style15 {color: #666666}
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
.style18 {color: #FFFFFF; font-size: 18px; }
-->
</style></head>

<body bgcolor="grey">
<table border="2" width="1116" align="center">
  <tr>
    <td width="3006" align="center" valign="middle" bgcolor="#993366">
      <h1 align="left" class="style2 style6"><img src="LOG.png" width="537" height="81" /></h1>
      <span class="style8"><span class="style9">MOTTO</span>: <span class="style7">MODEL OF DIGNITY</span></span> <br />
      <table width="1108">
        <tr>
          <td align="center"><span class="style15"><a href="index.php">HOME</a></span></td>
          <td align="center"><span class="style15"><a href="add.php">ADD YOUR BUSSINESS</a> </span></td>
          <td align="center"><span class="style15"><a href="search.php">SEARCH FOR ADDRESS</a> </span></td>
          <td align="center"><span class="style15"><a href="advert.php">ADVERTISE HERE</a> </span></td>
          <td align="center"><span class="style15"><a href="contact.php">CONTACT US</a> </span></td>
          <td align="center"><span class="style15"><a href="about.php">ABOUT US</a> </span></td>
        </tr>
      </table>
    <br /></td>
  </tr>
  <tr>
    <td height="400" align="center" valign="top" bgcolor="#666666"><form id="form2" name="form2" method="POST" action="?">
      <span class="style13">YOU CAN NOW ADD YOUR BUSINESS AND ADDRESS HERE</span>
      
      <label>
      <div align="center">
    <h2><span class="style18">TITLE OF YOUR BUSINESS AND ADDRESS</span>
      <input name="topic" type="text" size="50" />
      </label></h2>
  </div>
  <label><span class="style18"> WHAT DO YOU SELL? YOUR PRODUCTS</span>
  <input name="post" type="text" size="50" />
  </label>
 
  <input id="adform" name="Submit2" type="submit" value="upload" />
    </form>
      <form name="form1" method="POST" action="<?php echo $editFormAction; ?>">
        <table width="460">
          <tr>
            <td width="173"><span class="style7">COMPANY NAME </span></td>
            <td width="275"><input name="post2" type="text" size="50" /></td>
          </tr>
          <tr>
            <td><span class="style7">ADDRESS</span></td>
            <td><input name="post3" type="text" size="50" /></td>
          </tr>
          <tr>
            <td><span class="style7">PRODUCT</span></td>
            <td><input name="post4" type="text" size="50" /></td>
          </tr>
          <tr>
            <td><span class="style7">E-MAIL ADDRESS </span></td>
            <td><input name="post5" type="text" size="50" /></td>
          </tr>
          <tr>
            <td><span class="style7">PHONE NUMBER </span></td>
            <td><input name="post6" type="text" size="50" /></td>
          </tr>
          <tr>
            <td><label>
              <input type="submit" name="Submit" value="SUBMIT" />
              </label>            </td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1">
      </form>
    </tr>
  <tr>
    <td height="400" align="center" valign="top" bgcolor="#666666">	</td>
  </tr>
</table>
</body>
</html>
