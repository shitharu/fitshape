<!DOCTYPE html>
<html>
<head>
	<title>Predicted Body Shape</title>
	<link rel="icon" href="images/logo/logo.png">

<style>
		body {
			font-family: "Lato", sans-serif;
			background-size:cover;
			background-image: url("https://img.freepik.com/free-photo/abstract-luxury-gradient-blue-background-smooth-dark-blue-with-black-vignette-studio-banner_1258-56228.jpg?w=826&t=st=1682794873~exp=1682795473~hmac=d73405c7d47f78db6f22c90ef31fec858974c57c604d64cb335fb31113c8d6c4");
		}

		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
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
        <h1 align="center">Your Body Shape</h1><br><br>
        
            
        <?php
            // Check if an image was uploaded
            if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                // Move the uploaded image to the data directory
                $target_dir = "classification_images/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                $ext = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                if ($ext === 'jpg' || $ext === 'jpeg' || $ext === 'png') {
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

                    // Call the Python script to make predictions on the uploaded image
                    $command = escapeshellcmd("python x.py " . $target_file);
                    $output = shell_exec($command);

					$last_word = explode(" ", trim($output));	// Split the output into an array of words
					$last_word = end($last_word);		// Get the last word in the $output variable

					// Check the value of the last word and redirect to the appropriate HTML file
					if ($last_word == "glass") {		// hourglass
						header("Location: Hourglass_Body_Shape_Dress.html");
					} elseif ($last_word == "triangle") {	// inverted triangle
						header("Location: Inverted_Tringle_Body_Shape_Dress.html");
					} elseif ($last_word == "ar") {		// pear
						header("Location: Pear_Body_Shape_Dress.html");
					} elseif ($last_word == "tangle") {		// rectangle
						header("Location: Rectangle_Body_Shape_Dress.html");
					} elseif ($last_word == "poon") {		// spoon
						header("Location: Spoon_Body_Shape_Dress.html");
					} else {
					// Handle the case where the last word does not match any of the expected values
						echo "<script>alert('Invalid value for output.!')</script>";	
					}

                } else {
					echo "<script>alert('Invalid file format. Only JPG, JPEG and PNG are allowed!')</script>";	
                }
 
            } else {
				echo "<script>alert('Error uploading image!')</script>";	
            }
        ?>

            
	</div>
</body>
</html>

