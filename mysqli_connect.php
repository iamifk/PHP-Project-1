<?php
	$con=mysqli_connect("localhost","root","","bookstore");
	if (mysqli_connect_errno())
	{
	echo "Unable to connect to MYSQL: " . mysqli_connect_error();
	}
?>
