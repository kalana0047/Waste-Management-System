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
<table width="95%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td><div align="center"><img src="Imgs/ban.png" width="800" height="150" /></div></td>
  </tr>
  <tr>
    <td align="right" width="71%"><span class="style7">You are logged in as <?php echo $_SESSION['RName'];?> (<a href="Logout.php">LOGOUT!</a></span>)</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFF99">
<?php
	$loc=$_POST['txtLoc'];
	$com=$_POST['txtComment'];
	$un=$_SESSION['un'];
	$st='Not Approved';
	/*$filename = $_POST[$_FILES['image']['name']];
	
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	if( in_array($imageFileType,$extensions_arr) ){
 
 	if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename)){
		echo $filename.'<br>'.$loc.'<br>'.$com;
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'
';
	}
	}*/
	$conn=mysqli_connect('localhost','root','','db_group_41');
	if($conn){
		$queAdd="INSERT INTO gtf_master_data(Location,Comment,Username,AddDate,Status) VALUES('$loc','$com','$un',(now()),'$st')";
		if(mysqli_query($conn,$queAdd)){
			echo 'Data successfully Added to the Green Task Force System!<br><a href="gtfPage.php"><img src="Imgs/back-Icon.png" width="64" height="64"></a>';
										}
			  }
	else{
		echo 'Database Error!<br><a href="Index.html"><img src="Imgs/back-icon.png" width="64" height="64"></a>'.mysqli_error($conn);
		}
?>
    </td>
  </tr>
</table>
<?php
								}
?>
</body>
</html>
