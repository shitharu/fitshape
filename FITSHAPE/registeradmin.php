<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitshape";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$name = ""; $email = ""; $telno=""; $username = "";
 $password = ""; $re_password = "";
    
    if(isset($_POST['btnSUBMIT'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$telno = $_POST['telno'];
		$username = $_POST['username'];

		$email = $_POST['email'];
		$password = $_POST['password'];
		$re_password = $_POST['re_password'];

        if(empty($name)||empty($email)||empty($telno)||empty($username)||empty($email)||
                empty($password)||empty($re_password)){
            
                  echo "<script>alert('Filed can not be Empty!.')</script>";
        }else{
			if($password==$re_password){
				
					$sql="INSERT INTO admin_login (name, email, telno, username, password) 
							VALUES ('".$name."', '".$email."', ".$telno.", '".$username."', '".$password."')";
	
					if(mysqli_query($conn,$sql)){
						move_uploaded_file($temp_name,$Image);
	
						echo "<script>alert('Your details inserted!.')</script>";
						
						header("location: indexadmin.php");
						
	
					}else{
	
					   echo "<script>alert('Your details not inserted.Try Again.')</script>";
					}
				
			}
            
        }        
    }

    mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration Page</title>
	<link rel="stylesheet" type="text/css" href="registercss.css">
</head>
<body>
	<div class="registration-box">
		<h2>Register Admin</h2>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
			

			<div class="user-box">
				<input type="text" name="name" required="">
				<label>Name</label>
			</div><br>

			<div class="user-box">
				<input type="email" name="email" required="">
				<label>Email</label>
			</div><br>

			<div class="user-box">
				<input type="telno" name="telno" required="">
				<label>Contact Number</label>
			</div><br>

			<div class="user-box">
				<input type="text" name="username" required="">
				<label>username</label>
			</div><br>

			
			<br>
			<h3 align="center">Login Ditails</h3><br><br>

	
			<div class="user-box">
				<input type="password" name="password" required="">
				<label>Password</label>
			</div><br>
			<div class="user-box">
				<input type="password" name="re_password" required="">
				<label>Repeat Your Password</label>
			</div><br>

            
			<p class="p">By creating an admin account you agree to our <a href="#">Terms & Privacy</a>.</p><br>
			<input type="submit" name="btnSUBMIT" value="Register">
			<input type="reset" name="btnCLEAR" value="Clear All"><br><br>

			<div class="container signin">
				<p class="p">Already have an account? <a href="indexadmin.php">Sign in</a>.</p>
			</div><br>
		</form>
	</div>
</body>
</html>

