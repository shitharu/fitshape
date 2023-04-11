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

		$error="";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);

			$sql = "SELECT * FROM user_details WHERE email='$email' and password='$password'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);

			if ($count == 1) {
				$_SESSION['email'] = $email;
				echo "<script>alert('Login Successful !')</script>";
				//$error = "lOGIN sUCCESSFUL";
				header("location: profile.php");
			} else {
				
				//echo "<script>alert('Your Login Name or Password is invalid !')</script>";
				$error = "Your Login Name or Password is invalid";

				header("location: index.php");
				
			}
		}else{
			echo "<script>alert('Somthing Wrong. Please Try Again ')</script>";
			//$error = "Somthing Wrong";
			
			header("location: index.php");
		}
	}

?>


	

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
		
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
	
		</form>
	
</body>
</html>






