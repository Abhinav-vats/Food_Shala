<html>
<head>
	<title>Foodshala 🍔</title>

	<link rel="shortcut icon" href="images/pizza.ico">
    <link rel="stylesheet" type="text/css" href="formdesign.css">
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
 		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
 		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500" rel="stylesheet" type="text/css" media="all" />
		
		<style>
		
		.abhi
		{
			width: 100vw;
		}
		.cl_blc
		{
			color:  #fff;
			font-family:Apple Chancery, cursive;
		}
		
		</style>

    <script type="text/javascript" src="validation.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="formscript.js"></script>
</head>

<body>
	
		<div class="container-fluid abhi nav navbar-header" style="background-color: #875050;  margin-top: -10 px; height: 90px;">
			<h1><a href="main_page.php" class="cl_blc navbar-brand" style="margin-left: 10px; margin-top: 10px; font-size: 50px;">FOODSHALA  🍔</a></h1>
		</div>
		<section class="form-box" >
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-12 col-lg-offset-3 form-wizard">
						<!--Form Wizard -->
                    	<form action="signup.php" role="form" method="post">
							<h3 style="color:#875050;"><b>Sign Up</b></h3>
                    		<p>Fill all form field to go next step</p>							
							<!-- Form progress -->
                    		<div class="form-wizard-steps form-wizard-tolal-steps-4">
                    			<div class="form-wizard-progress">
                    			    <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                    			</div>
								<!-- Step 1 -->
                    			<div class="form-wizard-step active">
                    				<div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true" style="margin-top: 10px;"></i></div>
                    				<p>Personal</p>
                    			</div>
								<!-- Step 1 ->
								
								<!-- Step 2 -->
                    			<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-location-arrow" aria-hidden="true"style="margin-top: 10px;"></i></div>
                    				<p>Contact</p>
                    			</div>
								<!-- Step 2 -->								
                    		</div>
							<!-- Form progress -->
                    		
							
							<!-- Form Step 1 -->
                    		<fieldset>
                          <style type="text/css">
                            .error
                            {
                              color: red;
                            }
                          </style>

                    		    <h4>Personal Information: <span>Step 1 - 2</span></h4>
								
								<div class="col-md-6 form-group">
                    			    <label>Name: <span>*</span></label>
                                    <input type="text" name="name" id="name" onblur="vname()" placeholder="First Name" class="form-control required">
                                    <span id="errname" class="error"></span>
                                </div>
																
								<div class="col-md-6  form-group">
                    			    <label>User Type: <span>*</span></label>
									<select name="utype" id="type">
										<option value="Customer">Customer</option>
										<option value="Restaurants">Restaurants</option>
									</select>                                    
                                </div>
                                
                                <div class="col-md-6 form-group">
                    			    <label id="size">Food Preference: <span>*</span></label>
									<select name="pref">
										<option value="Veg">Vegetarian</option>
										<option value="Non-Veg">Non-Vegetarian</option>
										<option value="both">Both Veg and Non-Veg</option>
									</select>
                                    
                                    
                                </div>
								
                                <div class="form-wizard-buttons">
                                    <button type="submit"  class="btn btn-next">Next</button>
                                </div>
                              
                            </fieldset>
							<!-- Form Step 1 -->

							<!-- Form Step 2 -->
                            <fieldset -->

                                <h4>Contact Information : <span>Step 2 - 5</span></h4>
								<div class="form-group">
                    			    <label>Email / Username: <span>*</span></label>
                                    <input type="email" id="pemail" onblur="vpemail()" name="usr_name" placeholder="Email / Username" class="form-control required">
                                    <span id="errpemail" class="error"></span>
                                </div>
								<div class="form-group">
									<label>New Password: <span>*</span></label>
									<input type="password" id="newpassword" onblur="newPassword()" name="newpassword" placeholder="New Password" class="form-control required">
									<span id="errnewpassword" class="error"></span>
								</div>
								<div class="form-group">
									<label>Confirm Password: <span>*</span></label>
									<input type="password" id="a" onblur="confirmPassword()" name="u_pass" placeholder="Confirm Password" class="form-control required">
									<span id="ea" class="error"></span>
								</div>
								
								
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" name="submit" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
							<!-- Form Step 2 -->
                    	
                    	</form>
						<!-- Form Wizard -->
                    </div>
                </div>
                    
            </div>
        </section>
	</form>
		<script>
			
			$(document).ready(function () {
				$("#type").change(function () {
				var val = $(this).val();
				if (val == "Restaurants") {
					$("#size").html("Food Type You Will Offer: <span>*</span>");
				} else if (val == "Customer") {
					$("#size").html("Food Preference: <span>*</span>");
				}
			});
});
			
		</script>
</body>
</html>



<?php

	require_once('conn.php');
	
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$utype = $_POST['utype'];
		$pref = $_POST['pref'];
		$usr_name = $_POST['usr_name'];
		$u_pass = $_POST['u_pass'];
		
		$query = "INSERT INTO user (uname, u_usr_name, upass, utype, upref) VALUES('".$name."', '".$usr_name."', '".$u_pass."', '".$utype."', '".$pref."')";
		$result = mysqli_query($con, $query);
			if(mysqli_fetch_assoc($result))
			{
				header("location:signup.php");
			}
			else
			{
				header("location:signup.php");
			}
	}

?>