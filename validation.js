

function vname()
{
	var name=document.getElementById("name").value
	var alpha=/^[A-Z a-z]+$/
    

	if(name.length<1)
	{
		document.getElementById("name").style.border="2px red solid"
		document.getElementById("errname").innerHTML="Enter Name..."
		
	}
	else if(!name.match(alpha))
	{
		document.getElementById("name").style.border="2px red solid"
		document.getElementById("errname").innerHTML="Enter Alphabets Only..."	
	}
	else
	{
		document.getElementById("name").style.border="2px green solid"
		document.getElementById("name").style.color="green"
		document.getElementById("errname").innerHTML=""
	}
}




function vprice()
{
	var price=document.getElementById("sapid").value
 	var pricevalid=/^[0-9]/
	if(price.length<1)
	{
		document.getElementById("price").style.border="2px red solid"
		document.getElementById("errprice").innerHTML="Enter valid	 SAP ID..."
	}
	else if(!price.match(sapvalid))
	{
		document.getElementById("price").style.border="2px red solid"
		document.getElementById("errprice").innerHTML="Enter Only Digits..."
	}
	else
	{
		document.getElementById("price").style.border="2px green solid"
		document.getElementById("price").style.color="green"
		document.getElementById("errprice").innerHTML=""	
	}
}

function vemail()
{
	var email=document.getElementById("email").value
	var emailalpha = /^[a-z][a-z|0-9|]*([_][a-z|0-9]+)*([.][a-z|0-9]+([_][a-z|0-9]+)*)?@[a-z][a-z|0-9|]*\.([a-z][a-z|0-9]*(\.[a-z][a-z|0-9]*)?)$/
	
	if(email.length<1)
	{
		document.getElementById("email").style.border="2px red solid"
		document.getElementById("erremail").innerHTML="Enter Your Email Address..."
	}
	else if(!email.match(emailalpha))
	{
		document.getElementById("email").style.border="2px red solid"
		document.getElementById("erremail").innerHTML="Enter Valid Email Address..."
	}
	else
	{
		document.getElementById("email").style.border="2px green solid"
		document.getElementById("email").style.color="green"
		document.getElementById("erremail").innerHTML=""
	}
}

function vpemail()
{
	var email=document.getElementById("pemail").value
	var emailalpha = /^[a-z][a-z|0-9|]*([_][a-z|0-9]+)*([.][a-z|0-9]+([_][a-z|0-9]+)*)?@[a-z][a-z|0-9|]*\.([a-z][a-z|0-9]*(\.[a-z][a-z|0-9]*)?)$/
	
	if(email.length<1)
	{
		document.getElementById("pemail").style.border="2px red solid"
		document.getElementById("errpemail").innerHTML="Enter Your Email Address..."
	}
	else if(!email.match(emailalpha))
	{
		document.getElementById("pemail").style.border="2px red solid"
		document.getElementById("errpemail").innerHTML="Enter Valid Email Address..."
	}
	else
	{
		document.getElementById("pemail").style.border="2px green solid"
		document.getElementById("pemail").style.color="green"
		document.getElementById("errpemail").innerHTML=""
	}
}


function loginemail()
{
	var email=document.getElementById("loginemail").value
	var emailalpha = /^[a-z][a-z|0-9|]*([_][a-z|0-9]+)*([.][a-z|0-9]+([_][a-z|0-9]+)*)?@[a-z][a-z|0-9|]*\.([a-z][a-z|0-9]*(\.[a-z][a-z|0-9]*)?)$/

	if(email.length<1)
	{
		document.getElementById("loginemail").style.border="2px red solid"
		document.getElementById("errloginemail").innerHTML="Enter Your Email Address..."
	}
	else if(!email.match(emailalpha))
	{
		document.getElementById("loginemail").style.border="2px red solid"
		document.getElementById("errloginemail").innerHTML="Enter Valid Email Address..."
	}
	else
	{
		document.getElementById("loginemail").style.border="2px green solid"
		document.getElementById("loginemail").style.color="green"
		document.getElementById("errloginemail").innerHTML=""
	}
}

function newPassword()
{
	var password=document.getElementById("newpassword").value
	var alpha=/^[A-Z0-9a-z]{6,32}$/

	if(password.length<8 || password.length>15)
	{
		document.getElementById("newpassword").style.border="2px red solid"
		document.getElementById("errnewpassword").innerHTML="Enter Your Password of 8-15 characters..."
	}
	else if(!password.match(alpha))
	{
		document.getElementById("newpassword").style.border="2px red solid"
		document.getElementById("errnewpassword").innerHTML="Password Must Be Alphanumeric..."
	}
	else
	{
		document.getElementById("newpassword").style.border="2px green solid"
		document.getElementById("newpassword").style.color="green"
		document.getElementById("errnewpassword").innerHTML=""
	}
}

function confirmPassword()
{
	var password=document.getElementById("a").value
	//var pass=document.getElementById("newpassword").value
	var alpha=/^[A-Z0-9a-z]{6,32}$/

	if(password.length<8 || password.length>15)
	{
		document.getElementById("a").style.border="2px red solid"
		document.getElementById("ea").innerHTML="Enter Your Password of 8-15 characters..."
	}
	else if(!password.match(alpha))
	{
		document.getElementById("a").style.border="2px red solid"
		document.getElementById("ea").innerHTML="Password Must Be Alphanumeric..."
	}
	else if(password!=document.getElementById("newpassword").value)
	{
		document.getElementById("a").style.border="2px red solid"
		document.getElementById("ea").innerHTML="Password must be same..."	
	}
	else
	{
		document.getElementById("a").style.border="2px green solid"
		document.getElementById("a").style.color="green"
		document.getElementById("ea").innerHTML=""
	}
}

function loginpassword()
{
	var password=document.getElementById("loginpassword").value
	var alpha=/^[A-Z0-9a-z]{6,32}$/

	if(password.length<8 && password.length>15)
	{
		document.getElementById("loginpassword").style.border="2px red solid"
		document.getElementById("errloginpassword").innerHTML="Enter Your Password of 8-15 characters..."
	}
	else if(!password.match(alpha))
	{
		document.getElementById("loginpassword").style.border="2px red solid"
		document.getElementById("errloginpassword").innerHTML="Password Must Be Min/Max 6/32..."
	}
	else
	{
		document.getElementById("loginpassword").style.border="2px green solid"
		document.getElementById("loginpassword").style.color="green"
		document.getElementById("errloginpassword").innerHTML=""
	}
}

