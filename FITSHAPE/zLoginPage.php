<?php 


$db_host = 'localhost';
$db_name = 'fitshape';
$db_user = 'root';
$db_pass = '';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}


    /*include('DB_fitshape.php');
    $con = get_connection();*/
	
	//include 'DB_fitshape.php';

session_start();
error_reporting(0);

if (isset($_SESSION['email'])) {
    header("Location:UserDashboard.php");
}
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

	$result = mysqli_query($con, $sql);

	if ($result->num_rows > 0) {

		$row = mysqli_fetch_assoc($result);

	
      	if($row['username'] =='#Admin') {
			$_SESSION['username'] = $row;
			$_SESSION['email'] = $row['email'];
		
			header("Location: Admin_Dashboard.php");
	  	}	
     	else{
			$_SESSION['username'] = $row; 
			$_SESSION['email'] = $row['email'];

			header("Location: home.html");
	 }
	} else {
    	echo "<script>alert('Email or Password is Wrong!!.')</script>";
	}
}

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">

	<title>User Login</title>
	<link rel="icon" href="image/homepage/icon/logo.png">

</head>

<body>

	<div class="container" style="width: 450px; height:450px;" >

		<form action="" method="POST" class="login-email">

			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>

			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="registration.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>