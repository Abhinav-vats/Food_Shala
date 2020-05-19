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
		
		<section class= "form-box">
			<form role="form" method="POST">
				<div class="container-fluid">
					<table class="table">
						<tr>
							<th colspan="7"><div align = "center" ><h3  style="color:#2F7306;"><b>Hurrah Order Delivered!! Another Customer Satisfied</b></h3></div></th>
						</tr>
						<tr>
						<form role="form" method="post"> 
							<th colspan="7"><button type="submit" name="submit" value="Satisfy Another Customer" class="btn col-md-12 btn-next btn-warning" >Satisfy Another Customer</button></th>
						</form>
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

<?php
	if(isset($_POST['submit']))
	{
		header("location:rpordr.php");		
	}
?>

