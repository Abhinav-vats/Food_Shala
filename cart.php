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
				<li><a href = "logout.php?logout" class="cl_white"><span class="glyphicon glyphicon-off"></span></a></li>
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
		
		<?php
			require_once('conn.php');
			$name = $_SESSION['name'];
			$query = "SELECT * FROM food_order where ord_user='".$name."'";
			$result = mysqli_query($con, $query);
		?>
		
		<section class= "form-box">
			<form role="form" method="POST">
				<div class="container-fluid">
					<table class="table">
						<tr>
							<th colspan="6"><div align = "center" ><h3  style="color:#2F7306;"><b>My Cart</b></h3></div></th>
						</tr>
						<tr>
							<th>
								<h3  style="color:#2F7306;"><b>Name</b></h3>
							</th>
							<th>
								<h3  style="color:#2F7306;"><b>Restaurant Name</b></h3>
							</th>
							<th>
								<h3  style="color:#2F7306;"><b>Price</b></h3>
							</th>
							<th>
								<h3  style="color:#2F7306;"><b>Quantity</b></h3>
							</th>
							<th>
								<h3  style="color:#2F7306;"><b>Food Type</b></h3>
							</th>
							<th>
								<h3  style="color:#2F7306;"><b>Total</b></h3>
							</th>
							
						</tr>
						<?php
							$grand_total = 0;
							while($row=mysqli_fetch_assoc($result))
							{
								$grand_total = $grand_total+ $row['ord_total'];
								?>
								<tr>
									<td>
										<h3><?php echo $row['ord_food'] ?></h3>
										<input type="hidden" name="fname" value="<?php echo $row['ord_food']; ?>">
									</td>
									<td>
										<h3><?php echo $row['ord_rest'] ?></h3>
										<input type="hidden" name="restname" value="<?php echo $row['ord_rest']; ?>">
									</td>
									<td>
										<h3><?php echo $row['ord_rate'] ?></h3>
										<input type="hidden" name="price" value="<?php echo $row['ord_rate']; ?>">
									</td>
									<td>
										<h3><?php echo $row['ord_quantity'] ?></h3>
										<input type="hidden" name="price" value="<?php echo $row['ord_quantity']; ?>">
									</td>
									<td>
										<h3><?php echo $row['ord_type'] ?></h3>
										<input type="hidden" name="price" value="<?php echo $row['ord_type']; ?>">
									</td>
									<td>
										<h3><?php echo $row['ord_total'] ?></h3>
										<input type="hidden" name="price" value="<?php echo $row['ord_total']; ?>">
									</td>
									
								</tr>
								
								<?php
								
							}
							
						?>
						<tr>
							<th colspan="6"><div align = "center" ><h3  style="color:#2F7306;"><b>TOTAL: <?php echo $grand_total ?></b></h3></div></th>
						</tr>
						<tr>
							<th colspan="6"><button type="submit" name="pay" value="Pay" class="btn col-md-12 btn-next btn-success" >Pay</button></th>
						</tr>
						
						
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



