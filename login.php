<html>
<head>
	<title>Foodshala 🍔</title>
	<link rel="shortcut icon" href="images/pizza.ico">
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
 		<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /> -->
 		<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500" rel="stylesheet" type="text/css" media="all" /> -->

    <script type="text/javascript" src="validation.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<style>
	.card {
  		box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
		}
    .error
    {
      color:red;
    }
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

<script>
	
// image uploader scripts
</script>
</head>

<body style="background-color:#fff; ">
<div class="container-fluid abhi nav navbar-header" style="background-color: #875050;  margin-top: -10 px; height: 90px;">
			<h1><a href="main_page.php" class="cl_blc navbar-brand" style="margin-left: 10px; margin-top: 10px; font-size: 50px;">FOODSHALA  🍔</a></h1>
		</div>
<div class="container pt-3" style="margin-top:10%;">
  <div class="row justify-content-sm-center">
    <div class="col-sm-6 col-md-4">

      <div class="card border-info text-center">
        <div class="card-header">
          Sign in to continue
        </div>
        <div class="card-body">
          <!-- <img src="https://placeimg.com/128/128/tech/sepia"> -->
          <!--<h4 class="text-center">Hunger & Debt Ltd</h4>-->
          <form action="proc.php" method="POST">
            <input type="email" name="uname" style="margin-top: 25px;" id="loginemail" onkeypress="loginemail()" class="form-control mb-2" placeholder="Username" required autofocus>
            <span id="errloginemail" class="error"></span>
            <input type="password" name="password" id="loginpassword" onkeypress="loginpassword()" class="form-control mb-2" placeholder="Password" required>
            <span id="errloginpassword" class="error"></span>
			<div class="form-control mb-2">
                    			    <label>User Type: <span>*</span></label>
									<select name="utype" class="form-control mb-2" id="type">
										<option value="Customer">Customer</option>
										<option value="Restaurants">Restaurants</option>
									</select>                                    
                                </div>
            <button class="btn btn-lg btn-primary btn-block mb-1" name="login" type="submit" style="background-color:#875050; border-color: #875050;">Sign in</button>
            <label class="checkbox float-left">
              <input type="checkbox" value="remember-me">
              Remember me
            </label>
            <a href="signup.php" class="float-right">Create an account </a>
			</form>
          
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>