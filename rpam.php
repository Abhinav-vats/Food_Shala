<!DOCTYPE html>
<html>
	<head>
		<title>Foodshala 🍔</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="formdesign.css">
		<link rel="shortcut icon" href="images/pizza.ico">

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script type="text/javascript" src="validation.js"></script>
		<script type="text/javascript" src="formscript.js"></script>
		
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
		
		<section class="form-box">
			<!--div class="container">
				<div class = "row">
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-12 col-lg-offset-3 form-wizard">
						<!--Form Wizard -->
                    	<form action="rpam.php" role="form" method="post">
							<br>
							<div class="container-fluid">
							<table class="table">
								<tr>
									<th colspan="2"><div align = "center" ><h3  style="color:#875050;"><b>Add New Meal To The Menu</b></h3></div></th>
								</tr>
								<tr>
									<td>
										<div class="col-md-6 form-group">
											<label>Food Name: <span>*</span></label>
											<input type="text" name="name" id="name" onblur="vname()" placeholder="First Name" class="form-control required">
											<span id="errname" class="error"></span>
										</div>
									</td>
									<td>
										<div class="col-md-6 form-group">
											<label >Food Type: <span>*</span></label>
											<?php
												if($_SESSION['type']=='both'){
											?>
											<select name="ftype">
												<option value="Veg">Vegetarian</option>
												<option value="Non-Veg">Non-Vegetarian</option>
											</select>
											<?php
												}
												else{
											?>
											<input type="text" name="ftype" id="ftype"  value="<?php echo $_SESSION['type'];?>" class="form-control required" readonly>
											<?php
												}
												?>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="2" >
										<div class="col-md-12 form-group">
											<label>Price: <span>*</span></label>
											<input type="number" name="price" id="price" onblur="vprice()" placeholder="Price" class="form-control required">
											<span id="errprice" class="error"></span>
										</div>
									</td>
									<!--td>
										<div class="col-md-6 form-group">
											<label>Image: <span>*</span></label>
											<input type="file" name="image" id="image" class="form-control required">
										</div>
									</td -->
								</tr>
								<tr>
									<td colspan="2"><div align = "center" ><button type="submit" name="submit" id="add" class="btn col-md-12 btn-next btn-success">ADD</button></div></td>
								</tr>
							</table>
							</div>
						</form>
					</div>
				</div>
		
		
			</div>
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
		
		$(document).ready(function(){
			$('#add').click(function(){
				var image_name= $('#image').val();
				if(image_name=='')
				{
					alert("Please Select Image");
					return false;
				}
				else
				{
					var ext = $('#image').val().split('.').pop().toLowerCase();
					if(jQuery.inArray(ext, ['gif','png', 'jpg', 'jpeg'])==-1)
					{
						alert("Invalid Image File");
						$('#image').val('');
						return false;
					}
				}
			});
		});
		</script>	
	</body>
	<?php

	require_once('conn.php');
	
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$utype = $_POST['ftype'];
		$price = $_POST['price'];
		$usr_name = $_SESSION['name'];
		$link = addslashes(file_get_contents($_FILE["image"]["tmp_name"]));
		
		
		
		$query = "INSERT INTO rest_details (f_name, f_rest, f_type, f_price) VALUES('".$name."', '".$usr_name."', '".$utype."', '".$price."')";
		$result = mysqli_query($con, $query);
			if(mysqli_fetch_assoc($result))
			{
				echo '<script>alert("Image Inserted")</scrip>';
				header("location:rpam.php");
			}
				
	}

?>
</html>


