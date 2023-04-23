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
	<link rel="stylesheet" type="text/css" href="css/bshape.css">
	<link rel="icon" href="images/logo/logo.png">
</head>
<body>
	<div class="registration-box">
		<h2>Body Shape</h2>
		<form method="post" enctype="multipart/form-data">
			
			<div class="user-box">
				<label id ="shape" for="float-data">Wow .. You so beautiful. Your Have a<b> <?php echo $body_shape?> </b>Body Shape Figure.</label>
			</div><br>

            <?php

                $img1 = "images/Pear_about/dressbarn_Blog_HowToDressForBodyShape_Pear_Header.webp";
                $img2 = "images/Inverted_Triangle_about/dressbarn_Blog_HowToDressForBodyShape_InvertedTriangle_Header.webp";
                $img3 = "images/Spoon_about/dressbarn_Blog_HowToDressForBodyShape_Spoon_Header.webp";
                $img4 = "images/Rectangle_about/dressbarn_Blog_HowToDressForBodyShape_Rectangle_Header.webp";
                $img5 = "images/Hourglass_about/dressbarn_Blog_HowToDressForBodyShape_Hourglass_Header.webp";

                if ($body_shape == "Pear") 
                    {
                        echo '<img src="'.$img1.'" alt="Pear Body Shape image" style="width:700px;height:400px;">
                        <br><br>
                        If you want more imformation about 
                        <a href="Pear_About.html">Pear Body Shape</a>. <br>
                        Stay update with us because, We have a lot of details about fashion. 
                        Register with <a href="index.php">FITSHAPE.LK</a> for more details.';
                    } 
                else if ($body_shape == "Inverted Triangle") 
                    {
                        echo '<img src="'.$img2.'" alt="Inverted Triangle Body Shape image" style="width:700px;height:400px;">

                        <br><br>
                        If you want more imformation about 
                        <a href="Inverted_Triangle_About.html">Inverted Triangle Body Shape</a>. <br>
                        Stay update with us because, We have a lot of details about fashion. 
                        Register with <a href="index.php">FITSHAPE.LK</a> for more details.';
                    } 
                else if ($body_shape == "Spoon") 
                    {
                        echo '<img src="'.$img3.'" alt="Spoon Body Shape image" style="width:700px;height:400px;">

                        <br><br>
                        If you want more imformation about 
                        <a href="Spoon_About.html">Spoon Body Shape</a>. <br>
                        Stay update with us because, We have a lot of details about fashion. 
                        Register with <a href="index.php">FITSHAPE.LK</a> for more details.';
                    }
                else if ($body_shape == "Rectangle") 
                    {
                        echo '<img src="'.$img4.'" alt="Rectangle Body Shape image" style="width:700px;height:400px;">

                        <br><br>
                        If you want more imformation about 
                        <a href="Rectangle_About.html">Rectangle Body Shape</a>. <br>
                        Stay update with us because, We have a lot of details about fashion. 
                        Register with <a href="index.php">FITSHAPE.LK</a> for more details.';
                    } 
                else if ($body_shape == "Hourglass")
                    {
                        echo '<img src="'.$img5.'" alt="Hourglass Body Shape image" style="width:700px;height:400px;">

                        <br><br>
                        If you want more imformation about 
                        <a href="Hourglass_About.html">Hourglass Body Shape</a>. <br>
                        Stay update with us because, We have a lot of details about fashion. 
                        Register with <a href="index.php">FITSHAPE.LK</a> for more details.';
                    }
            ?>
  
            <br>
            <br>      

		</form>
	</div>
</body>
</html>


