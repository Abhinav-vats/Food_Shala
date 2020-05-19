<?php
	
	require_once('conn.php');
	if(isset($_POST['delivered']))
	{
		
		$id = $_POST['id'];
		$query = "DELETE FROM `food_order` WHERE `food_order`.`ord_id` ='".$id."'";
		$result = mysqli_query($con, $query);
			if($result)
			{
				header("location:rpordr.php");
				
				
			}
			
	}


?>