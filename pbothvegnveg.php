<?php
require_once('conn.php');
$query = "SELECT * FROM rest_details";
$result = mysqli_query($con, $query);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Foodshala 🍔</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="shortcut icon" href="images/pizza.ico">

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<style>
			section{
				width: 100vw;
				height: 100vh;
				padding:50px;
			}
			.cl_white{
				color: white;
				font-size: 25px;
				margin-top: 10px;
				
				
			}
			.text_font{
				opacity: 1;
				font-family:Comic Sans MS, cursive, sans-serif;
			}
			.abhi{
				
			}
		</style>
	</head>

	<body class ="text_font fade" data-spy="scroll" data-target=".abhi">
		<nav class="navbar abhi navbar-fixed-top" style="background-color: #875050;">
			<div class="container">
				<div class="nav navbar-header">
					<a href="process.php" class="navbar-brand cl_white" >Foodshala 🍔</a>
				</div>
			<div id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="process.php" class="cl_white">Home</a></li>
				<li class="dropdown"><a href="Menu.html" class="dropdown-toggle cl_white" data-toggle="dropdown">Menu <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="pveg.php">Vegetarian</a></li>
						<li><a href="pnveg.php">Non-Vegetarian</a></li>
						<li><a href="pbothvegnveg.php">Both Vegetarian and Non-Vegetarian</a></li>
					</ul>
				
				</li>
				<li><a href="cart.php" class="cl_white"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
				</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
						session_start();
						if(isset($_SESSION['user']))
						{
				?>
				<li><a href = "logout.php?logout" class="cl_white"><span class="glyphicon glyphicon-off"></span> </a></li>
				<?php
						}
						else
						{
							header("location:login.php");
						}
				?>
				
				</ul>
			</div>
			</div>
		</nav>
		
		<section class= "form-box">
			<form role="form" method="POST">
				<div class="container-fluid">
					<table class="table">
						<tr>
							<th colspan="5"><div align = "center" ><h3  style="color:#0090AD;"><b>Non-Veg Foods</b></h3></div></th>
						</tr>
						<tr>
							<th>
								<h3  style="color:#0090AD;"><b>Name</b></h3>
							</th>
							<th>
								<h3  style="color:#0090AD;"><b>Veg/Non-Veg</b></h3>
							</th>
							<th>
								<h3  style="color:#0090AD;"><b>Restaurant Name</b></h3>
							</th>
							<th>
								<h3  style="color:#0090AD;"><b>Price</b></h3>
							</th>
							<th>
								<h3  style="color:#0090AD;"><b>Quantity</b></h3>
							</th>
							<th>
								<h3  style="color:#0090AD;"><b>Add to Cart</b></h3>
							</th>
						</tr>
						<?php
							while($row=mysqli_fetch_assoc($result))
							{
								
								?>
								<form role="form" method="post">
								<tr>
									<td>
										<h3 value="<?php echo $row['f_name'] ?>"><?php echo $row['f_name'] ?></h3>
										<input type="hidden" name="fname" value="<?php echo $row['f_name'] ?>">
									</td>
									<td>
										<h3 value="<?php echo $row['f_type'] ?>"><?php echo $row['f_type'] ?></h3>
										<input type="hidden" name="fname" value="<?php echo $row['f_type'] ?>">
									</td>
									<td>
										<h3 value="<?php echo $row['f_rest'] ?>"><?php echo $row['f_rest'] ?></h3>
										<input type="hidden" name="restname" value="<?php echo $row['f_rest'] ?>">
									</td>
									<td>
										<h3 name="price" value="<?php echo $row['f_price'] ?>"><?php echo $row['f_price'] ?></h3>
										<input type="hidden" name="price" value="<?php echo $row['f_price'] ?>">
									</td>
									<td>
										<div class="col-md-4 form-group">
											<input type="number" name="quant" value="1" id="quant" class="form-control required">
										</div>
									</td>
									<td>
										<button type="submit" name="addtocart" id="add" style="color:#fff; background-color:#F18646;" class="btn col-md-10 btn-next">ADD</button>
									</td>
									<input type="hidden" name="ftype" value="<?php echo $row['f_type'] ?>">
								</tr>
								</form>
								<?php
								
							}
							
						?>
						
						
						
					</table>
				</div>
			</form>
		</section>
		
			
		<script>
		$(document).ready(function(){
		$('body').scrollspy({target: ".navbar", offset: 50});   
		$("#myNavbar a").on('click', function(event) {
		if (this.hash !== "") {
		  event.preventDefault();
		  var hash = this.hash;
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 800, function(){
			window.location.hash = hash;
		  });
		}
		});
		});
		</script>	
	</body>
</html>

<?php
	
	require_once('conn.php');
	if(isset($_POST['addtocart']))
	{
		$user = $_SESSION['name'];
		$fname = $_POST['fname'];
		$ftype = $_POST['ftype'];
		$quant = $_POST['quant'];
		$rest = $_POST['restname'];
		$rate = $_POST['price'];
		$total = $quant*$rate;
		
		$query = "INSERT INTO food_order (ord_user, ord_food, ord_type, ord_quantity, ord_rate, ord_rest, ord_total) VALUES('".$user."', '".$fname."', '".$ftype."', '".$quant."', '".$rate."', '".$rest."', '".$total."')";
		$result = mysqli_query($con, $query);
			if($result)
			{}
			
	}


?>

