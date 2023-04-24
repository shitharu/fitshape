<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitshape";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$username = ""; $age = ""; $Image=""; $country = ""; $date = "";
$shoulder = ""; $bust = ""; $waist = ""; $hip = ""; $weight = ""; $height = "";
$email = ""; $password = ""; $re_password = "";

$arrType = array('jpeg','jpg','png');
$path = "PicZ/";

    if(isset($_POST['btnSUBMIT'])){

		$username = $_POST['username'];
		$age = $_POST['age'];

		$temp_name = $_FILES['fileImage']['tmp_name'];
        $name = $_FILES['fileImage']['name'];
        $ext = explode(".",$name);

        $Image = $path.$name;

		$country = $_POST['country'];
		$date = $_POST['date'];

		$shoulder = $_POST['shoulder'];
		$bust = $_POST['bust'];
		$waist = $_POST['waist'];
		$hip = $_POST['hip'];

		$weight = $_POST['weight'];
		$height = $_POST['height'];

		$email = $_POST['email'];
		$password = $_POST['password'];
		$re_password = $_POST['re_password'];
		
		// Calculate the user's body shape
		$shoulder_to_hip_ratio = $shoulder / $hip;
		$bust_to_waist_ratio = $bust / $waist;

		if ($shoulder_to_hip_ratio < 0.8 && $bust_to_waist_ratio < 0.75) {
			$body_shape = "Pear";
		  } elseif ($shoulder_to_hip_ratio > 1.25 && $bust_to_waist_ratio < 0.75) {
			$body_shape = "Inverted Triangle";
		  } elseif ($shoulder_to_hip_ratio < 0.8 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
			$body_shape = "Spoon";
		  } elseif ($shoulder_to_hip_ratio >= 0.8 && $shoulder_to_hip_ratio <= 1.25 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
			$body_shape = "Rectangle";
		  } else {
			$body_shape = "Hourglass";
		  }

		  echo $body_shape;


        if(empty($username)||empty($age)||empty($Image)||empty($country)||empty($date)||
                empty($shoulder)||empty($bust)||empty($waist)||empty($hip)||
				empty($weight)||empty($height)||empty($email)||empty($password)||empty($re_password)){
            
                  echo "<script>alert('Filed can not be Empty!.')</script>";
        }else{
			if(10 < $age && $age < 120){
				if($password==$re_password){
					if(in_array(strtolower($ext[1]),$arrType)){
					
						$sql="INSERT INTO user_details (username, age, image, country, date, shoulder, bust, waist, hip,
										weight, height, email, password, body_shape) 
								VALUES ('".$username."', ".$age.", '".$Image."', '".$country."', '".$date."', 
										".$shoulder.", ".$bust.", ".$waist.", ".$hip.", ".$weight.", ".$height.",
										'".$email."', '".$re_password."', '".$body_shape."')";
		
						if(mysqli_query($conn,$sql)){
							move_uploaded_file($temp_name,$Image);
		
							echo "<script>alert('Your details inserted!.')</script>";	
							header("location: index.php");
							
						}else{
		
						   echo "<script>alert('Your details not inserted.Try Again.')</script>";
						}
					}
				}else{
					echo "<script>alert('Password is wrong')</script>";
				}
			}else{
				echo "<script>alert('For you to register in this system,<br> your age should be between 10 and 120 years.')</script>";
			}  
        }        
    }

    mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
	<title>User Registration Page</title>
	<link rel="stylesheet" type="text/css" href="registercss.css">
	<link rel="icon" href="images/logo/logo.png">
</head>
<body>
	<div class="registration-box">
		<h2>Register User</h2>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
			

			<div class="user-box">
				<input type="text" name="username" required="">
				<label>Username</label>
			</div><br>

			<div class="user-box">
				<input type="number" name="age" required="">
				<label>Age (years)</label>
			</div><br>

			<div class="form-label">Choose Image :</label>
              	<input type="file" name="fileImage">
            </div><br>

			<div class="user-box">
				<input type="text" name="country" required="">
				<label>Country</label>
			</div><br>

			<div class="user-box">
				<input type="date" name="date" required="">
			</div><br>

			<div class="user-box">
				<input type="number" step="0.01" name="shoulder" required="">
				<label for="float-data">Your Shoulder Size (cm)</label>
			</div><br>

			<div class="user-box">
				<input type="number" step="0.01" name="bust" required="">
				<label for="float-data">Your Bust Size (cm)</label>
			</div><br>

			<div class="user-box">
				<input type="number" step="0.01" name="waist" required="">
				<label for="float-data">Your Waist Size (cm)</label>
			</div><br>

			<div class="user-box">
				<input type="number" step="0.01" name="hip" required="">
				<label for="float-data">Your Hip Size (cm)</label>
			</div><br>

			<div class="user-box">
				<input type="number" step="0.01" name="weight" required="">
				<label for="float-data">Your Weight  (kg)</label>
			</div><br>

			<div class="user-box">
				<input type="number" step="0.01" name="height" required="">
				<label for="float-data">Your Height (m)</label>
			</div><br><br>

			<br><h3 align="center">Login Ditails</h3><br><br>

			<div class="user-box">
				<input type="email" name="email" required="">
				<label>Email</label>
			</div><br>
			<div class="user-box">
				<input type="password" name="password" required="">
				<label>Password</label>
			</div><br>
			<div class="user-box">
				<input type="password" name="re_password" required="">
				<label>Repeat Your Password</label>
			</div><br>
            
			<p class="p">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>
			<input type="submit" name="btnSUBMIT" value="Register">
			<input type="reset" name="btnCLEAR" value="Clear All"><br><br>

			<div class="container signin">
				<p class="p">Already have an account? <a href="index.php">Sign in</a>.</p>
			</div><br>
		</form>
	</div>
</body>
</html>
