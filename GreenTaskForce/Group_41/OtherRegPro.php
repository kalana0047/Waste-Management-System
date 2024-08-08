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
	font-size: 24px;
	font-weight: bold;
	font-style: italic;
}
body {
	background-image: url(Imgs/bg.png);
	background-repeat: no-repeat;
}
-->
</style>
</head>

<body>
<table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td><div align="center"><img src="Imgs/ban.png" width="800" height="150" /></div></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#F9FC8D">
    <?php
	$conn=mysqli_connect('localhost','root','','db_group_41');
	if($conn){
		$fn=$_POST['txtFN'];
		$con=$_POST['txtConNo'];
		$nic=$_POST['txtNIC'];
		$em=$_POST['txtEmail'];
		$un=$_POST['txtUN'];
		$pw=$_POST['txtPW'];
		$rpw=$_POST['txtRPW'];
		$ut=$_POST['rbType'];
		
		//echo $fn,$con,$nic,$em,$un,$pw,$rpw;
		if($pw==$rpw){
			$queSave="INSERT INTO userstbl(FullName,ConNo,NIC,Email,Username,Password,Date,UType) VALUES('$fn','$con','$nic','$em','$un','$pw',(now()),'$ut')";
		if(mysqli_query($conn,$queSave)){
			echo '<p align="center">'.$fn.' successfully SAVE to the Database!<br><a href="OtherReg.html"><img src="Imgs/back-icon.png" width="64px" height="64px"></a></p>';
										}
			else{
			echo $fn.' Not Save to the Database!'.mysqli_error($conn);
										}
						}
		else{
			echo 'Password & Retype Password is Not Match!<br><a href="OtherReg.html"><img src="Imgs/back-Icon.png" width="64px" height="64px"></a>';
			}
					 }
	else{
		echo 'Error 303!<br>Database is NOT Connected!<br><a href="Index.html"><img src="Imgs/back-icon.png" width="64px" height="64px"></a>';
		}
?>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
