<?php
	$con = mysqli_connect("localhost", "root", '', 'foodshala' );
	
	if(!$con)
	{
		die("Please Check your connection".mysqli_error($con));
	}

?>