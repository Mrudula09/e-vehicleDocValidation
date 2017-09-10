<?php
	include 'database.php';
	$wid = uniqid();
	session_start();
	$email = $_SESSION['user'];
		$lid = mysqli_real_escape_string($con, $_POST['lid']);
		$rno = mysqli_real_escape_string($con, $_POST['rnumber']);
		$query2="SELECT * FROM licensecard WHERE licenseid='$lid'";
		$query = "SELECT * FROM rcbook WHERE regno='$rno'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		if(!mysqli_query($con, $query) && !mysqli_query($con, $query2)){
		die('Error :'.mysqli_error($con));
		}else
		{
			if($count == 1)
			{
				echo "verfied rcbook and license";
			}
			else
			{
				echo "license or rcbook is not available";
			}
		}
		echo 'Your id=';
		echo $wid;
		echo '<>';
		echo $lid;
		echo '<>';
		echo $rno;
		echo '<>';
		echo $email;
		echo '<>';
		$query3 = "INSERT INTO `policewallet`(`walletid`, `license`, `rcbook`, `name`) VALUES ('$wid','$lid','$rno','$email')";
		if(!mysqli_query($con, $query3)){
		die('Error :'.mysqli_error($con));
		}else
		{
			echo 'sussuful';
			exit();
		}
	?>	
