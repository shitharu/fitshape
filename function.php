<?php 

namespace App;

class calculator{ // calculator
    public function calculator($shoulder, $hip, $bust, $waist){

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
          return $body_shape;
    }

	public function login($username, $password){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "fitshape";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}else{
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
				$error = "Your Login Name or Password is invalid";
				header("location: index.php");				
			}
		}
	}
}


?>