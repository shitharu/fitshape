<?php 

$db_host = 'localhost';
$db_name = 'demo';
$db_user = 'root';
$db_pass = '';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}


    /*include('DB_fitshape.php');
    $con = get_connection();*/


//include 'DB_fitshape.php';
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location:LoginPage.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('User Registration Successfully.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something Wrong !!!')</script>";
			}
		} else {
			echo "<script>alert(' Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">

	<title style="text-align: center;">User Register</title>
	<link rel="icon" href="image/homepage/icon/logo.png">


</head>

<body>
	<div class="container" style="width: 450px; height:620px;">
	
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight:800;">Register</p>
			<br>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group"><br>
				<button name="submit" class="btn">Register</button>
			</div><br>
			<p class="login-register-text">Already have an account? <a href="LoginPage.php">Sign in</a>.</p>
		</form>
	</div>
</body>
</html>