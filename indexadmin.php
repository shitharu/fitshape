

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
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
			<a href="index.php">
                <button class="btn btn-primary btn-lg" style="width:360px">Go to User Login</button>
            </a><br><br><hr><br>

			<h2>ADMIN LOGIN</h2>

			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		
			<div class="user-box">
				<input type="text" name="username" required="">
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" required="">
				<label>Password</label>
			</div>
			<input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg" style="width:360px">

			<br><br>

		</form>

		<?php
		// Check if the form has been submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Get the user's input from the form
			$usernamee = $_POST["username"];
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
			$sql = "SELECT * FROM admin_login WHERE username = '$usernamee' AND password = '$passwordd'";
			$result = $conn->query($sql);

			// Check if the query returned any results
			if ($result->num_rows > 0) {
				// The user's credentials are valid, so log them in
				session_start();
				$_SESSION["username"] = $usernamee;
				header("Location: adminpp.php");
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

