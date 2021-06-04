<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<link rel="stylesheet" href="assets/css/reg.css">
</head>
<body>
	<form method="post" action="server.php">
  	<?php include('errors.php'); ?>
		<div class="form-box">
			<header><h2>Registration Page</h2></header>

			<form id='register' class='input-group-register'>
				<label>First Name</label>
		     	<input type='text' name='First_name' class='input-field'  placeholder='First Name' required value="">
		     	<label>Last Name</label>
		    	<input type='text' name='Last_name' class='input-field'placeholder='Last Name ' required value="">
		    	<label>Email Id</label>
		     	<input type='email' name='Email_Id' class='input-field'placeholder='Email Id' required value="">
		     	<label>Enter Password</label>
		     	<input type='password' name='Enter_password' class='input-field'placeholder='Enter Password' required value="">
		     	<label>Confirm Password</label>
		     	<input type='password' name='Confirm_password' class='input-field'placeholder='Confirm Password'  required value="">
		     	<input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
             	<button type='submit'class='submit-btn' name="reg_user">Register</button>
             	
	 		</form>
		</div>
	</form>
</body>
</html>