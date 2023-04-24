

<!DOCTYPE html>
<html>
<head>
	<title>YOUR BODY SHAPE</title>
	<style>
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

                    // Display the predicted class
                    echo "<h2>Predicted body shape: <br>" . $output . "body shape</h2>";
					print($output);

					"<br><br>";


					// Get the last word in the $output variable
					//$last_word = end(explode(" ", $output));
					//$last_word = explode(".", $output)[count(explode(".", $output))-1]; // get the last word in the username

					//$last_word = explode(' ', $output);
					//$last_word = end($last_word);

					//$output_array = explode(" ", $output);
					//$last_word = array_slice($output_array, -3);

					//$words = explode(' ', trim($output));
					//$last_word = array_slice($words, -1);

					//$last_word = end(explode(" ", $output));

					//$last_word = explode(" ", $output); // Split the output into an array of words
					//$last_word = end($last_word); 

					$last_word = explode(" ", trim($output));
					$last_word = end($last_word);

					print($last_word);

					// Check the value of the last word and redirect to the appropriate HTML file
					if ($last_word == "hourglass") {
					header("Location: Hourglass_Body_Shape_Dress.html");
					} elseif ($last_word == "triangle") {
					header("Location: Inverted_Tringle_Body_Shape_Dress.html");
					} elseif ($last_word == "pear") {
					header("Location: Pear_Body_Shape_Dress.html");
					} elseif ($last_word == "rectangle") {
					header("Location: Rectangle_Body_Shape_Dress.html");
					} elseif ($last_word == "spoon") {
					header("Location: Spoon_Body_Shape_Dress.html");
					} else {
					// Handle the case where the last word does not match any of the expected values
					echo "Invalid value for output.";
					}
				









                } else {
                    echo 'Invalid file format. Only JPG, JPEG and PNG are allowed.';
                }
 
            } else {
                echo "<h2>Error uploading image</h2>";
            }
        ?>








            
	</div>
</body>
</html>

