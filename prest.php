<!DOCTYPE html>
<html>
	<head>
		<title>Foodshala 🍔</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="shortcut icon" href="pizza.ico">

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
				<li><a href="prest.php" class="cl_white">Restaurents</a></li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.php" class="cl_white"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
				<?php
						session_start();
						if(isset($_SESSION['user']))
						{
				?>
				<li><a href = "logout.php?logout" class="cl_white"><span class="glyphicon glyphicon-off"</a></li>
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



