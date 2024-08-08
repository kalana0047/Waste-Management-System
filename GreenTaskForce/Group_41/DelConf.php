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
	$conn=mysqli_connect('localhost','root','','db_group_41');
	$cid=$_GET['Delid'];
	
	$queDel="DELETE FROM gtf_master_data WHERE Serial='$cid'";
	if(mysqli_query($conn,$queDel)){
		echo 'Serial :'.$cid.' successfully Delete form the Database!';
								  }
?>
<div align="center">
          <a href="gtfPage.php"><img src="Imgs/back-icon.png" width="64" height="64"></a>
    </div>
    </td>
  </tr>
</table>
<?php
								}
?>
</body>
</html>
