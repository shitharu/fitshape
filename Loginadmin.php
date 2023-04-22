<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fitshape";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		session_start();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);

			$sql = "SELECT * FROM admin_login WHERE username='$username' and password='$password'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);

			if ($count == 1) {
				$_SESSION['username'] = $username;
				header("location: adminpp.php"); // USER DETAILS
			} else {
				$error = "Your Login Name or Password is invalid";
			}
		}else{
			$error = "Somthing Wrong";
		}
	}





