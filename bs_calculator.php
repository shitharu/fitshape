<!DOCTYPE html>
<html>
<head>
	<title>Body Shape Calculator</title>
	<link rel="stylesheet" type="text/css" href="registercss.css">
	<link rel="icon" href="images/logo/logo.png">

	<style>
	  body {
		font-family: "Lato", sans-serif;
		background-size:cover;
		background-image: url("https://img.freepik.com/free-photo/abstract-luxury-gradient-blue-background-smooth-dark-blue-with-black-vignette-studio-banner_1258-56228.jpg?w=826&t=st=1682794873~exp=1682795473~hmac=d73405c7d47f78db6f22c90ef31fec858974c57c604d64cb335fb31113c8d6c4");
	}
	</style>
	
</head>
<body>
	<div class="registration-box">
		<h2>Body Shape Calculator</h2>
		<form action="calculate.php" method="post" enctype="multipart/form-data">
			

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


			<input type="submit" name="btnSUBMIT" value="Calculate Body Shape">
			<input type="reset" name="btnCLEAR" value="Clear All"><br><br>


            

		</form>
	</div>
</body>
</html>


