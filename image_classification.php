<!DOCTYPE html>
<html>
<head>
	<title>Image Classification</title>
    <link rel="icon" href="images/logo/logo.PNG">
	
	<style>
		body {
			font-family: "Lato", sans-serif;
			background-size:cover;
			background-image: url("https://img.freepik.com/free-photo/abstract-luxury-gradient-blue-background-smooth-dark-blue-with-black-vignette-studio-banner_1258-56228.jpg?w=826&t=st=1682794873~exp=1682795473~hmac=d73405c7d47f78db6f22c90ef31fec858974c57c604d64cb335fb31113c8d6c4");
			}
		
		.container {
			margin: auto;
			width: 50%;
			padding: 10px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 0px 10px #888888;
		}
		
		h1 {
			text-align: center;
			color: #333;
		}
		
		form {
			margin-top: 20px;
			text-align: center;
		}
		
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 10px;
		}
		
		input[type="file"] {
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin-top: 10px;
			box-shadow: 0px 0px 5px #888888;
		}
	</style>
</head>
<body>
	<div class="container">
        <h1>Body Shape Predictor</h1>
        <form action="classify.php" method="post" enctype="multipart/form-data">
            <label for="image">Upload an image:</label>
            <input type="file" id="image" name="image" accept="image/*"><br><br>
            <input type="submit" value="Predict Body Shape">
        </form>
	</div>
</body>
</html>

