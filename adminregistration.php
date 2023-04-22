<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration Page</title>
	<link rel="stylesheet" type="text/css" href="registercss.css">
</head>
<body>
	<div class="registration-box">
		<h2>Register</h2>
		<form method="post" action="registeruser.php">
			
			<div class="user-box">
				<input type="text" name="username" required="">
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" required="">
				<label>Password</label>
			</div>
            
			<input type="submit" name="submit" value="Register">
		</form>
	</div>
</body>
</html>
