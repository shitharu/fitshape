<!DOCTYPE html>
<html>
<head>
	<title>User Login Page</title>
	<link rel="icon" href="images/logo/logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
	  body {
			font-family: "Lato", sans-serif;
			background-size:cover;
			background-image: url("https://cdn5.f-cdn.com/contestentries/1578585/21468461/5d62b49ac544b_thumb900.jpg");
			}
</style>
</head>
<body>



	<div class="login-box">
		<br>
			<a href="indexadmin.php">
                <button class="btn btn-primary btn-lg" style="width:360px">Go to Admin Login</button>
            </a><br><br><hr><br>

			<h2>USER LOGIN</h2>

			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		
			<div class="user-box">
				<input type="text" name="email" required="">
				<label>Email</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" required="">
				<label>Password</label>
			</div>
			<input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg" style="width:360px">

			<br><br><br>
	
			<div class="container signin">
				<p class="p">You don't have an account? Then <a href="register.php">Register</a> here.</p>
			</div>
		</form>

		<?php
		// Check if the form has been submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Get the user's input from the form
			$email = $_POST["email"];
			$passwordd = $_POST["password"];

			// Connect to the database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "fitshape";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}


			// Prepare the SQL statement to retrieve the user's information from the database
			$sql = "SELECT * FROM user_details WHERE email = '$email' AND password = '$passwordd'";
			$result = $conn->query($sql);

			// Check if the query returned any results
			if ($result->num_rows > 0) {
				// The user's credentials are valid, so log them in
				session_start();
				$_SESSION["email"] = $email;
				header("Location: profile.php");
				echo "<script>alert('Login Successful !')</script>";
			} else {
				// The user's credentials are invalid, so display an error message
				echo "<script>alert('Invalid username or password.')</script>";
			}

			// Close the database connection
			$conn->close();
		}
	?>
	</div>
</body>
</html>



