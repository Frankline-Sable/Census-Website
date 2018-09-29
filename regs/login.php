<?php include('function.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	
	<style>
	
		#modal{
			display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0,.5); /* Fallback color */
    background-color: rgba(0,0,0,0); /* Black w/ opacity */
			position: 6;
    padding-top: 60px;
			padding-left: 100px;
			padding-right: 100px;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		
		<div class="input-group">
			<button type="button" class="btnn" name="n" onClick="document.getElementById('modal').style.display='block';">Forgot Password</button>
		</div>

		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	
	<div style="background-color: lightgray;" id="modal">
	<h2>Forgot password?</h2>
		<form style="background-color: lightgray;">
			<div class="input-group">
			<label>Reset Password, Enter your email?</label>
			<input type="text" name="username" >
		</div>
			<div class="input-group">
			<button type="button" class="btn" name="login_btn">Reset</button>
		</div>
		</form>
	</div>
</body>
</html>