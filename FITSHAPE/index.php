
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="icon" href="images/logo/logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="login-box">
		<br>
			<a href="indexadmin.php">
                <button class="btn btn-primary btn-lg" style="width:360px">Go to Admin Login</button>
            </a><br><br><hr><br>

		<h2>USER LOGIN</h2>

		<form method="post" action="login.php">
		
			<div class="user-box">
				<input type="text" name="email" required="">
				<label>Email</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" required="">
				<label>Password</label>
			</div>
			<input type="submit" name="submit" value="Login" style="width:360px">

			<br><br><br><br>
	
			<div class="container signin">
				<p class="p">You don't have an account? Then <a href="register.php">Register</a> here.</p>
			</div><br>
		</form>
		<?php 
		?>
	</div>
</body>
</html>