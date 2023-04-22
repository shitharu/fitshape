<?php

if(isset($_POST['btnSUBMIT'])){

		$shoulder = $_POST['shoulder'];
		$bust = $_POST['bust'];
		$waist = $_POST['waist'];
		$hip = $_POST['hip'];
		
		// Calculate the user's body shape
		$shoulder_to_hip_ratio = $shoulder / $hip;
		$bust_to_waist_ratio = $bust / $waist;

		if ($shoulder_to_hip_ratio < 0.8 && $bust_to_waist_ratio < 0.75) {
			$body_shape = "Pear";
            //$img = "images/Pear_about/dressbarn_Blog_HowToDressForBodyShape_Pear_Header.webp";

		  } elseif ($shoulder_to_hip_ratio > 1.25 && $bust_to_waist_ratio < 0.75) {
			$body_shape = "Inverted Triangle";
            //$img = "images/Inverted_Triangle_about/dressbarn_Blog_HowToDressForBodyShape_InvertedTriangle_Header.webp";

		  } elseif ($shoulder_to_hip_ratio < 0.8 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
			$body_shape = "Spoon";
            //$img = "images/Spoon_about/dressbarn_Blog_HowToDressForBodyShape_Spoon_Header.webp";

		  } elseif ($shoulder_to_hip_ratio >= 0.8 && $shoulder_to_hip_ratio <= 1.25 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
			$body_shape = "Rectangle";
            //$img = "images/Rectangle_about/dressbarn_Blog_HowToDressForBodyShape_Rectangle_Header.webp";

		  } else {
			$body_shape = "Hourglass";
            //$img = "images/Hourglass_about/dressbarn_Blog_HowToDressForBodyShape_Hourglass_Header.webp";

		  }
      
    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Body Shape</title>
	<link rel="stylesheet" type="text/css" href="registercss.css">
	<link rel="icon" href="images/logo/logo.png">
</head>
<body>
	<div class="registration-box">
		<h2>Body Shape Calculator</h2>
		<form method="post" enctype="multipart/form-data">
			


			<div class="user-box">
				<label id ="shape" for="float-data">Your Body Shape Type is : <?php echo $body_shape?></label>
			</div><br>


            <?php
                //$num1 = $_POST["num1"];
                //$num2 = $_POST["num2"];

                //$img1 = "images/Pear_about/dressbarn_Blog_HowToDressForBodyShape_Pear_Header.webp";
                //$img2 = "images/Inverted_Triangle_about/dressbarn_Blog_HowToDressForBodyShape_InvertedTriangle_Header.webp";
                //$img3 = "images/Spoon_about/dressbarn_Blog_HowToDressForBodyShape_Spoon_Header.webp";
                //$img4 = "images/Rectangle_about/dressbarn_Blog_HowToDressForBodyShape_Rectangle_Header.webp";
                //$img5 = "images/Hourglass_about/dressbarn_Blog_HowToDressForBodyShape_Hourglass_Header.webp";

                $img1 = imagecreatefromjpeg("images/Pear_about/dressbarn_Blog_HowToDressForBodyShape_Pear_Header.webp");
                $img2 = imagecreatefromjpeg("images/Inverted_Triangle_about/dressbarn_Blog_HowToDressForBodyShape_InvertedTriangle_Header.webp");
                $img3 = imagecreatefromjpeg("images/Spoon_about/dressbarn_Blog_HowToDressForBodyShape_Spoon_Header.webp");
                $img4 = imagecreatefromjpeg("images/Rectangle_about/dressbarn_Blog_HowToDressForBodyShape_Rectangle_Header.webp");
                $img5 = imagecreatefromjpeg("images/Hourglass_about/dressbarn_Blog_HowToDressForBodyShape_Hourglass_Header.webp");


                $resized1 = imagescale($img1, 100, 100);
                $resized2 = imagescale($img2, 100, 100);
                $resized3 = imagescale($img3, 100, 100);
                $resized4 = imagescale($img4, 100, 100);
                $resized5 = imagescale($img5, 100, 100);

                 $resized1 = imagescale($img1, 100, 100);
                $resized2 = imagescale($img2, 100, 100);
                $resized3 = imagescale($img3, 100, 100);
                $resized4 = imagescale($img4, 100, 100);
                $resized5 = imagescale($img5, 100, 100);


                if ($body_shape == "Pear") 
                    {
                        echo '<img src="'.$resized1.'" alt="Pear Body Shape Image">';
                    } 
                else if ($body_shape == "Inverted Triangle") 
                    {
                        echo '<img src="'.$resized2.'" alt="Inverted Triangle Body Shape Image">';
                    } 
                else if ($body_shape == "Spoon") 
                    {
                        echo '<img src="'.$resized3.'" alt="Spoon Body Shape Image">';
                    }
                else if ($body_shape == "Rectangle") 
                    {
                        echo '<img src="'.$resized4.'" alt="Rectangle Body Shape Image">';
                    } 
                else if ($body_shape == "Hourglass")
                    {
                        echo '<img src="'.$resized5.'" alt="Hourglass Body Shape Image">';
                    }



                    $img1 = imagecreatefromjpeg("image1.jpg");
                    $img2 = imagecreatefromjpeg("image2.jpg");

                    // resize the images to 100x100 pixels
                    $resized1 = imagescale($img1, 100, 100);
                    $resized2 = imagescale($img2, 100, 100);

                    // save the resized images
                    imagejpeg($resized1, "resized1.jpg");
                    imagejpeg($resized2, "resized2.jpg");

                    // display the resized images
                    echo "<img src='resized1.jpg'>";
                    echo "<img src='resized2.jpg'>";

            ?>

            
            <br>
            <br>      

		</form>
	</div>
</body>
</html>


