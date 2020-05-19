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
					<a href="main_page.php" class="navbar-brand cl_white" >Foodshala 🍔</a>
				</div>
				<div id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="main_page.php" class="cl_white">Home</a></li>
						<li class="dropdown"><a class="dropdown-toggle cl_white" data-toggle="dropdown">Menu <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="veg.php">Vegetarian</a></li>
								<li><a href="nveg.php">Non-Vegetarian</a></li>
								<li><a href="bothvegnveg.php">Both Vegetarian and Non-Vegetarian</a></li>
							</ul>
						</li>
						
				
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="login.php" class="cl_white">Log-in</a></li>
						<li><a href="signup.php" class="cl_white">Register</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<section class= "form-box">
			<form role="form" method="POST">
				<div class="container-fluid">
					<table class="table">
						<tr>
							<th colspan="5"><div align = "center" ><h3  style="color:#0090AD;"><b>Veg and Non-Veg Foods</b></h3></div></th>
						</tr>
						<tr>
							<th>
								<h3  style="color:#0090AD;"><b>Name</b></h3>
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
								<tr>
									<td><?php echo $row['f_name'] ?></td>
									<td><?php echo $row['f_rest'] ?></td>
									<td><?php echo $row['f_price'] ?></td>
									<td><div class="col-md-3 form-group">
											<input type="number" name="price" id="price" onblur="vprice()"  class="form-control required">
										</div></td>
									<td><a href="login.php"><button type="button" name="submit" id="add" style="color:#fff; background-color:#F18646;" class="btn col-md-12 btn-next">ADD</button></a></td>
								</tr>
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

