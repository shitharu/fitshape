<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitshape";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$name = ""; $email = ""; $subject = ""; $msg = "";
    
    if(isset($_POST['btnSUBMIT'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
        $msg = $_POST['msg'];

        if(empty($name)||empty($email)||empty($subject)||empty($msg)){
            
                  echo "<script>alert('Filed can not be Empty!.')</script>";
        }else{
               
				$sql="INSERT INTO contact_us (name, email, subject, msg) 
						VALUES ('".$name."', '".$email."', '".$subject."', '".$msg."')";

                if(mysqli_query($conn,$sql)){

                    echo "<script>alert('Your Message has been sent!.')</script>";
					
					header("location: home.html");
					
                }else{

                   echo "<script>alert('Your details not inserted.Try Again.')</script>";
                }
            
        }        
    }

    mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
    <link rel="icon" href="images/logo/logo.png">
	<link rel="stylesheet" type="text/css" href="registercss.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
	
body {
	font-family: "Lato", sans-serif;
	background-size:cover;
	background-image: url("https://img.freepik.com/free-photo/abstract-luxury-gradient-blue-background-smooth-dark-blue-with-black-vignette-studio-banner_1258-56228.jpg?w=826&t=st=1682794873~exp=1682795473~hmac=d73405c7d47f78db6f22c90ef31fec858974c57c604d64cb335fb31113c8d6c4");
}

</style>

<body>
	<div class="registration-box">
    
        <h2 style="text-align:center;">Contact Form</h2>
        
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
			

			<div class="user-box">
				<input type="text" name="name" required="">
				<label>Name</label>
			</div>

            <div class="user-box">
				<input type="text" name="email" required="">
				<label>Email</label>
			</div>

            <div class="user-box">
				<input type="text" name="subject" required="">
				<label>Subject</label>
			</div>

			<div>
            <label>Your Message</label>
				<textarea type="text-box" name="msg" required="" style="height:200px; width:350px"></textarea>
			</div>
            
            <br>
            <input type="submit" value="Submit" name="btnSUBMIT" class="btn btn-primary btn-lg" style="width:360px">
		</form>
	</div>
</body>
</html>
