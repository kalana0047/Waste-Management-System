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
				$act=$_POST['rbAct'];
		
		$queUp="UPDATE gtf_master_data SET Status='$act' WHERE Serial='$Ser'";
		if(mysqli_query($con,$queUp)){
			header("Location:CapRep.php");
										}
								}
						}
			
			$queGet="SELECT * FROM gtf_master_data WHERE Serial='$Ser'";
			$res=mysqli_query($con,$queGet);
			$resData=mysqli_fetch_assoc($res);							
?>
	<table cellpadding="5" cellspacing="0" width="60%" border="0" align="center">
    <tr>
      <td><span class="style4">Serial Number</span></td>
      <td colspan="2"><span class="style4"><?php echo $resData['Serial']?></span></td>
      </tr>
    <tr>
      <td><span class="style4">Location</span></td>
      <td colspan="2"><span class="style4"><?php echo $resData['Location']?></span></td>
      </tr>
    <tr>
      <td><span class="style4">Comment</span></td>
      <td colspan="2"><span class="style4"><?php echo $resData['Comment']?></span></td>
      </tr>
    <tr>
      <td width="35%"><span class="style4">
      	<label>
      	<input name="rbAct" type="radio" id="rbAct" value="Red Flagged" />
      	</label>
      Red Flag (Urgent)</span></td>
      <td width="34%"><span class="style4">
        <label>
        <input name="rbAct" type="radio" id="rbAct2" value="Approved" />
        </label> 
        Approved
</span></td>
      <td width="31%"><span class="style4">
        <label>
        <input name="rbAct" type="radio" id="rbAct3" value="Rejected" />
        </label> 
        Rejected
</span></td>
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