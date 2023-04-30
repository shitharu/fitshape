

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

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitshape";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

$usernamee = ""; $password = ""; 


if(isset($_POST['submit'])){

    $usernamee = $_POST['username'];
	$password = $_POST['password'];

		$sql = "SELECT * FROM admin_login WHERE username='$usernamee' and password='$password'";

        //$sql = "SELECT * FROM admin_login WHERE username LIKE '%$usernamee%'";
        	$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);

			if ($count == 1) {
				$_SESSION['username'] = $username;
				echo "<script>alert('Login Successful !')</script>";	
				header("location: adminpp.php");
			} else {
				echo "<script>alert('Check Your Username and Password Again !')</script>";					
			}
}

?>

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

			<br><br><br>
	
			<div class="container signin">
				<p class="p">You don't have an admin account? Then <a href="registeradmin.php">Register</a> here.</p>
			</div>
		</form>
	</div>
</body>
</html>