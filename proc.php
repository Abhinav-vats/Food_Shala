<?php
session_start();
require_once('conn.php');
	
	if(isset($_POST['login']))
	{
		if(empty($_POST['uname'])  ||  empty($_POST['password']))
		{
			header("location:login.php?Empty=Please Fill in the Blanks");
		}
		else
		{
			$query =  "Select * from user where u_usr_name='".$_POST['uname']."' AND upass='".$_POST['password']."' AND utype='".$_POST['utype']."'";
			$result = mysqli_query($con, $query);
			
			if($row=mysqli_fetch_assoc($result) )
			{
				$_SESSION['user'] = $_POST['uname'];
				$_SESSION['name'] = $row['uname'];
				$_SESSION['type'] = $row['upref'];
				if($_POST['utype']=="Restaurants")
					header("location:rest_process.php");
				else
					header("location:process.php");
			}
			else
			{
				header("location:login.php");
			}
		}
	}
	else
	{
		echo 'not working';
	}

?>