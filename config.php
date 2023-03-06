<?php

$con = mysqli_connect("localhost","root","","developers");
//$con = mysqli_connect("15.207.84.225","cse","cse","developers");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>