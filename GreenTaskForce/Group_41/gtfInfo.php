<?php
	session_start();
	if(isset($_SESSION['un'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenTaskForce</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Calibri;
	color: #CCCCCC;
}
body {
	background-image: url(Imgs/bg.png);
	background-repeat: no-repeat;
}
.style2 {
	font-size: 28px;
	color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
}
.style3 {
	font-size: 20px;
	font-weight: bold;
	font-style: italic;
}
.style4 {
	font-size: 18px;
	color: #000000;
}
.style18 {font-size: 20px; font-weight: bold; font-style: italic; color: #006600; }
.style7 {font-size: 18px}
-->
</style>
</head>

<body>
<form action="saveInfo.php" method="post" enctype="multipart/form-data">
<table width="95%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td><div align="center"><img src="Imgs/ban.png" width="800" height="150" /></div></td>
  </tr>
  <tr>
    <td align="right" width="71%"><span class="style7">You are logged in as <?php echo $_SESSION['RName'];?> (<a href="Logout.php">LOGOUT!</a></span>)</td>
  </tr>
  <tr>
    <td>
    <table width="50%" border="0" align="center" cellpadding="10" cellspacing="0">
    <tr>
      <td colspan="2" bgcolor="#003300"><span class="style2">GARBAGE INFORMATION</span></td>
    </tr>
    <tr>
      <td width="50%" class="style13 style3">Image</td>
      <td width="50%" class="style3">Location</td>
    </tr>
    <tr>
      <td><span class="style9">
        <label>
        <input name="image" type="file" class="style4" size="35"/>
        </label>
      </span></td>
      <td><input name="txtLoc" type="text" class="style4" id="txtLoc" size="30" maxlength="100" /></td>
    </tr>
    <tr>
      <td colspan="2" class="style3">Comment</td>
    </tr>
    <tr>
      <td height="130" colspan="2"><span class="style9"></span>
          <label></label>
      <textarea name="txtComment" cols="50" rows="5" class="style4" id="txtComment"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="right">
        <input name="btnAdd" type="submit" class="style18" id="btnAdd" value="ADD" />
      </div></td>
    </tr>
  </table>
    </td>
  </tr>
</table>
</form>
<?php
								}
?>
</body>
</html>
