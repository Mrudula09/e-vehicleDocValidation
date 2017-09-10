<?php
	include 'database.php';
	if(isset($_POST['emailid']))
	{
		$emailid = mysqli_real_escape_string($con, $_POST['emailid']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		

		if(!isset($emailid) || $emailid == '' || !isset($password) || $password == ''){
		$error = "Please fill in your emailid and password";
		header("Location: index.php?error=".urlencode($error));
		exit();}
		else{
		
			$query = "SELECT * FROM user WHERE emailid='$emailid'";
			$result = mysqli_query($con,$query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$active = $row['active'];
			$count = mysqli_num_rows($result);
						
		if(!mysqli_query($con, $query)){
		die('Error :'.mysqli_error($con));
		}else
		{
			if($count == 1)
			{
				session_start();
				$_SESSION['user']=$emailid;
				header("Location: gallery.php");
				exit();
			}
			else
			{
				echo "emailid or password incorrect";
			}
		}
		}
	}
	