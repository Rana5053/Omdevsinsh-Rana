<?php

    session_start();
    
    
    if(@$_SESSION['username'] != "" && @$_SESSION['password'] != "")
    {
      header("Location:index.php");
    }
  ?>

<!DOCTYPE html>
<html>
<head>
<script src="js\bootstrap.min.js"></script>
<script src="js\jquery.min.js"></script>
<link rel="stylesheet" href="js\bootstrap.min.css">
<script src="js\popper.min.js"></script>
<script>
	$(document).ready(function() {
		
		$('#form').submit(function() {
			$('.error').remove();
			var username = $('#username').val();
			
			var password = $('#password').val();
		
			if (username=="" || password=="") {
				if(username=="")
					$('#username').after('<span class="error">This username field is required</span>');
				if(password=="")
					$('#password').after('<span class="error">This password field is required</span>');
				return false;
			}
		});
		
		});
</script>
</head>
<body>
<title>Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body{color:#740eb4;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
h1
{
		text-align:center;
		color:brown;
		text-decoration:underline;
		text-shadow:2px 1px 4px black;
}
button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 30%;
  border-radius: 50%;
}

.container {

        padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
user
{
	color:
	

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<center><h1>Login Form</h1></center>
<style>


</style>
<div class="container">
<form method="POST" action="validationuser.php">
	<div class="container">
		<div class="form-group">
			<label for="username" id="username" ><b>Username</b></label>
			<input type="text" class="form-control" id="username" placeholder="Rana" name="username" required>
		</div>
	</div>
	<div class="container">
		<div class="form-group">
			<label for="password" id="password" ><b>Password</b></label>
			<input type="password" class="form-control" id="password" placeholder="1234" name="password" required>
		</div>
	</div>
	<div class="container">
			<button type="submit" class="btn btn-success" id="login">Login</button>
			<label>
			<input type="checkbox" checked="checked" id="check" name="remember"> Remember me
			</label>
	</div>
	<div class="container">		
			<button type="button" class="btn btn-link"><a href="regiistration.php">Create a Account</a></button>
	</div>
</form>
</div>
</body>
</html>
