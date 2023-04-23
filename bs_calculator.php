<!DOCTYPE html>
<html>
<head>
	<title>Body Shape Calculator</title>
	<link rel="stylesheet" type="text/css" href="registercss.css">
	<link rel="icon" href="images/logo/logo.png">
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


