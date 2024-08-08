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
-->
</style>
</head>

<body>
<table width="95%" border="0" cellspacing="0" cellpadding="5" align="center">
  <tr>
    <td><div align="center"><img src="Imgs/ban.png" width="800" height="150" /></div></td>
  </tr>
  <tr>
    <td align="right" width="71%"><span class="style7">You are logged in as <?php echo $_SESSION['RName'];?> (<a href="Logout.php">LOGOUT!</a></span>)</td>
  </tr>
  <tr>
    <td>
    <?php
	if(isset($_GET['id'])){
		$ser=$_GET['id'];
?>
<form method="post">
	<p align="center">Are you sure you want to DELETE Customer ID:<?php echo $ser;?> from the Database???</p>
<?php
	echo '<p align="center"><a href="DelConf.php?Delid='.$ser.'"><img src="Imgs/btnDel.png" width="200" height="68"></a></p>';
?>
    <div align="center">
          <a href="gtfView.php"><img src="Imgs/back-icon.png" width="64" height="64"></a>
    </div>
</form>
    </td>
  </tr>
</table>
<?php
						}
								}
?>
</body>
</html>
