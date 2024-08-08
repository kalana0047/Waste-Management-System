<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	if(isset($_SESSION['un'])){
		$conn=mysqli_connect('localhost','root','','db_group_41');
		if($conn){			
					$id=$_SESSION['uid'];
					
					$queUp="UPDATE logsch SET Logout=(now()) WHERE Serial='$id'";
					if(mysqli_query($conn,$queUp)){
						session_destroy();
						header("Location:Index.html");
												   }
												   }
		else{
			echo 'Error 303!<br>Database is NOT Connected!<br>
			  <a href="Login.html"><img src="back-icon.png" width="200" height="120"></a>'; 
			}	
								}
?>
</body>
</html>
