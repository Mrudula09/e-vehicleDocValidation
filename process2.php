<?php
	include 'database.php';
	
	if(isset($_POST['submit']))
	{
		$emailid = mysqli_real_escape_string($con, $_POST['emailid']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$phno = mysqli_real_escape_string($con, $_POST['phno']);
		
		
			$query = "INSERT INTO user (emailid,password,name,phno) VALUES ('$emailid','$password','$name','$phno')";
			
		if(!mysqli_query($con, $query)){
		die('Error :'.mysqli_error($con));
		}else
		{
			header("Location: gallery.html");
			exit();
		}
	}