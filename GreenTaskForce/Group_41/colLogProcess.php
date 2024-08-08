<?php
	session_start();
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
<table width="95%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td><div align="center"><img src="Imgs/ban.png" width="800" height="150" /></div></td>
  </tr>
  <tr>
    <td align="center">
  <?php
	$un=$_POST['txtUN'];
	$pw=$_POST['txtPW'];
	
	if(!empty($un) && !empty($pw)){
		$conn=mysqli_connect('localhost','root','','db_group_41');
		if($conn){
			$queData="SELECT Username,FullName,Password,UType FROM userstbl WHERE Username='$un'";
			if(mysqli_query($conn,$queData)){
				$NumRec=mysqli_query($conn,$queData);
				
				if(mysqli_num_rows($NumRec)>0){
					$rv=mysqli_fetch_array($NumRec);
					
					if($rv['Username']==$un && $rv['Password']==$pw && $rv['UType']=='COLLECTOR'){
						$_SESSION['RName']=$rv['FullName'];
						$_SESSION['un']=$un;
						
					$queSche="INSERT INTO logsch(Username,LogIn) VALUES('$un',(now()))";
						if(mysqli_query($conn,$queSche)){
						
					$queGet="SELECT MAX(Serial) FROM logsch WHERE Username='$un' GROUP BY Username";
						if(mysqli_query($conn,$queGet)){
							$Data=mysqli_query($conn,$queGet);
							$val=mysqli_fetch_array($Data);
							$_SESSION['uid']=$val['MAX(Serial)'];
							header("Location:ColsRep.php");
														}
														}
																	 }
					else{
						echo 'UNAUTHORISED ACCESS DENIED!<br>Incorrect Username or Password or Wrong Page!<br><a href="Index.html"><img src="Imgs/back-icon.png" width="64" height="64"></a>';
						}
												}
				else{
					echo 'UNAUTHORISED ACCESS DENIED!<br>Please Register before trying to Login!<br><a href="Login.html"><img src="Imgs/back-icon.png" width="64" height="64"></a>';
					}
											}
				 }
		else{
			echo 'Error 303!<br>Database is NOT Connected!<br>
			  <a href="Login.html"><img src="Imgs/back-icon.png" width="64" height="64"></a>'; 
			}
								   }
	else{
		echo 'Username or Password cannot be BLANK!<br>
			  <a href="Login.html"><img src="Imgs/back-icon.png" width="64" height="64"></a>';
		}
?>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</html>
