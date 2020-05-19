<?php
	session_start();
	if(isset($_SESSION['user']))
	{
		echo "Welcome user  ".$_SESSION['user'].'<br/>';
		echo '<a href = "logout.php?logout">Logout</a>';
	}

?>