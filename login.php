<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<link rel="stylesheet" href="assets/css/log.css">
</head>
<body>
	<form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	<div class="form-box">
		<header><h2>Login Page</h2></header><br><br><br><br><br><br><br>
		<form id='login' class='input-group-login'>
			<label>Email Id</label>
       		<input type='email'class='input-field' name="Email_Id" placeholder='Email Id' required >
       		<label>Enter Password</label>
			<input type='password'class='input-field' name="Enter_password" placeholder='Enter Password' required><br><br><br>
			<div><input type='checkbox'class='check-box'>
			<div><button type='submit'class='login-btn' name="login_user">Log in</button></div>
			</div>
  			<p>
  				Not yet a member? <a href="registration.php">Sign up</a>
  			</p>
		</form>
	</div>
</form>
</body>
</html>