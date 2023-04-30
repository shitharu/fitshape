<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitshape";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$name = ""; $feedback = ""; $mood = "";
    
    if(isset($_POST['btnSUBMIT'])){

		$name = $_POST['name'];
		$feedback = $_POST['feedback'];
		$mood = $_POST['dropCategory'];

        if(empty($name)||empty($feedback)||empty($mood)){
            
                  echo "<script>alert('Filed can not be Empty!.')</script>";
        }else{
               
				$sql="INSERT INTO feedbacks (name, feedback, mood) 
						VALUES ('".$name."', '".$feedback."', '".$mood."')";

                if(mysqli_query($conn,$sql)){

                    echo "<script>alert('Your details inserted!.')</script>";
					
					header("location: allfeedbacks.php");
					
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
	<title>Feedback Form (Normal)</title>
    <link rel="icon" href="images/logo/logo.png">
	<link rel="stylesheet" type="text/css" href="registercss.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
body {
			font-family: "Lato", sans-serif;
			background-size:cover;
			background-image: url("https://cdn5.f-cdn.com/contestentries/1578585/21468461/5d62b49ac544b_thumb900.jpg");
			}

</style>

<body>
	<div class="registration-box">
    
        <h2 style="text-align:center;">Feedback Form</h2>
            <a href="allfeedbacks.php">
                <button class="btn btn-primary btn-lg" style="width:360px"">View All Feedbacks</button>
            </a><br><br>
        
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
			

			<div class="user-box">
				<input type="text" name="name" required="">
				<label>Name</label>
			</div>

			<div>
            <label>Feedback</label>
				<textarea type="text-box" name="feedback" required="" style="height:200px; width:350px"></textarea>
			</div>

            <div>
                <label>Your Mood :</label>  &nbsp; &nbsp;

                        <select name="dropCategory" id="dropCategory">
                            <option value="Satisfied"> Satisfied </option>
                            <option value="Very Good"> Very Good </option>
                            <option value="Good"> Good </option>
                            <option value="Not Bad"> Not Bad </option>
                            <option value="Bad"> Bad </option>
                        </select>
                </div>
            
            <br>
            <input type="submit" value="Submit" name="btnSUBMIT" class="btn btn-primary btn-lg" style="width:360px">
		</form>
	</div>
</body>
</html>
