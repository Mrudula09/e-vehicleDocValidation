
	<?php
$con=mysqli_connect("localhost","root","moto1997","vwallet");

if( mysqli_connect_errno()){
	echo 'failed to connect to MySQL :'.$mysqli_connect_error();
}

if(!mysqli_select_db($con,"vwallet"))
	echo "not connected";
