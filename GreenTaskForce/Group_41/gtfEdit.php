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
<form action="" method="post">
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
	$con=mysqli_connect('localhost','root','','db_group_41');
	if($con){
		if(isset($_GET['id'])){
			$Ser=$_GET['id'];
			
			if(isset($_POST['btnUp'])){
				$Loc=$_POST['txtLoc'];
				$Com=$_POST['txtCom'];
		
		$queUp="UPDATE gtf_master_data SET Location='$Loc',Comment='$Com' WHERE Serial='$Ser'";
		if(mysqli_query($con,$queUp)){
			header("Location:Dis.php");
										}
								}
						}
			
			$queGet="SELECT * FROM gtf_master_data WHERE Serial='$Ser'";
			$res=mysqli_query($con,$queGet);
			$resData=mysqli_fetch_assoc($res);							
?>
	<table cellpadding="5" cellspacing="0" width="60%" border="0" align="center">
    <tr>
      <td colspan="2"><span class="style4">Email Address</span></td>
      <td><span class="style4">
        <input name="txtLoc" type="text" size="40" maxlength="100" value="<?php echo $resData['Location']?>"/>
      </span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="style4">Address</span></td>
      <td rowspan="2"><span class="style4">
        <textarea name="txtCom" cols="40" rows="4"><?php echo $resData['Comment']?></textarea>
      </span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="style4"></span></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><span class="style4">
      </span></div>        <span class="style4"><label>
        <div align="center" class="style6">
          <input name="btnCl" type="reset" class="style6" id="btnCl" value="CLEAR" />
        </div>
        </label>
      </span></td>
      <td><div align="center"><span class="style4"></span>
      </div>
        <label>
        <div align="center">
          <input name="btnUp" type="submit" class="style6" id="btnUp" value="UPDATE" />
        </div>
      </label></td>
    </tr>
        </table>
    </td>
  </tr>
</table>
<form>
<?php
					}
								}
?>
</body>
</html>