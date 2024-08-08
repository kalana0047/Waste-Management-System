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
<table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
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
	
			$queSel="SELECT * FROM gtf_master_data WHERE Status!='Not Approved' AND Status!='Rejected'";
			if(mysqli_query($conn,$queSel)){
				$dataRes=mysqli_query($conn,$queSel);
				if(mysqli_num_rows($dataRes)>0){
					echo '<table width="80%" align="center" boarder="0" cellpadding="5" cellspacing="0">
							<tr>
								<th bgcolor="#006600"><font color="#ffffff">Serial</font></th>
								<th bgcolor="#006600"><font color="#ffffff">Location</font></th>
								<th bgcolor="#006600"><font color="#ffffff">Comment</font></th>
								<th bgcolor="#006600"><font color="#ffffff">Status</font></th>
							</tr>';
						while($rowVal=mysqli_fetch_assoc($dataRes)){
							echo '<tr>
									<td>'.$rowVal['Serial'].'</td>
									<td>'.$rowVal['Location'].'</td>
									<td>'.$rowVal['Comment'].'</td>
									<td bgcolor="#003300">'.$rowVal['Status'].'</td>
								  </tr>';
																	}
					echo '</table>';
												}
											}
			else{
				echo 'Data Not Selected!'.mysqli_error($conn);
				}
						}
	?>
    </td>
  </tr>
</table>
</body>
</html>
