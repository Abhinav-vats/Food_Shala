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
					<a href="rest_process.php" class="navbar-brand cl_white" >Foodshala 🍔</a>
				</div>
			<div id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="rest_process.php" class="cl_white">Home</a></li>
				<li><a href="rpam.php" class="cl_white">Add to Menu</a></li>
				<li><a href="rpordr.php" class="cl_white">View Orders</a></li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!-- li><a href="cart.php" class="cl_white"><span class="glyphicon glyphicon-shopping-cart"></span></a></li -->
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
			$query = "SELECT * FROM food_order where ord_rest='".$name."'";
			$result = mysqli_query($con, $query);
		?>
		
		<section class= "form-box">
			<form role="form" method="POST">
				<div class="container-fluid">
					<table class="table">
						<tr>
							<th colspan="7"><div align = "center" ><h3  style="color:#2F7306;"><b>My Cart</b></h3></div></th>
						</tr>
						<tr>
							<th>
								<h3  style="color:#2F7306;"><b>Name</b></h3>
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
								<h3  style="color:#2F7306;"><b>Ordered By</b></h3>
							</th>
							<th>
								<h3  style="color:#2F7306;"><b>Total</b></h3>
							</th>
							<th>
								<h3  style="color:#2F7306;"><b>Delivered/ Not-Delivered</b></h3>
							</th>
							
						</tr>
						<?php
							
							while($row=mysqli_fetch_assoc($result))
							{
								
								?>
								<form action = "delete.php" role="form" method="post" >
								<tr>
									<td>
										<h3><?php echo $row['ord_food'] ?></h3>
										<input type="hidden" name="fname" value="<?php echo $row['ord_food']; ?>">
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
										<h3><?php echo $row['ord_user'] ?></h3>
										<input type="hidden" name="price" value="<?php echo $row['ord_user']; ?>">
									</td>
									<td>
										<h3><?php echo $row['ord_total'] ?></h3>
										<input type="hidden" name="price" value="<?php echo $row['ord_total']; ?>">
									</td>
									<td>
										<button type="submit" name="delivered" value="Pay" class="btn col-md-12 btn-next btn-warning" >Delivered</button>
									</td>
						
								</tr>
									<input type="hidden" name="id" value="<?php echo $row['ord_id']; ?>">
								
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




