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
        } 
          elseif ($shoulder_to_hip_ratio > 1.25 && $bust_to_waist_ratio < 0.75) {
			$body_shape = "Inverted Triangle";
        } 
          elseif ($shoulder_to_hip_ratio < 0.8 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
			$body_shape = "Spoon";
        } 
           elseif ($shoulder_to_hip_ratio >= 0.8 && $shoulder_to_hip_ratio <= 1.25 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
			$body_shape = "Rectangle";
        } 
          else {
			$body_shape = "Hourglass";
        }
      
    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Body Shape</title>
	<link rel="stylesheet" type="text/css" href="css/bshape.css">
	<link rel="icon" href="images/logo/logo.png">

    <style>
        body {
			background-image: url("https://wallpaper.dog/large/112744.jpg");
		}

    </style>
</head>
<body>
	<div class="registration-box" style="height:700px"><br>
		<h1 align = "center">Your Body Shape</h1>
		<form method="post" enctype="multipart/form-data">
			
			<div class="user-box">
				<label id ="shape" for="float-data">
                    Wow .. You are so beautiful. Be proud, you have a beautiful well-shaped body.
                    Exercise regularly and keep it up.<br><br>
                    <h3>Your Body Shape :  <?php echo $body_shape?> Body Shape </h3>
                </label>
			</div><br><br><br><br>

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
                        Stay update with us. Because, We have a lot of details about fashion. 
                        Register with <a href="index.php">FitShape.lk</a> for more details.';
                    } 
                else if ($body_shape == "Inverted Triangle") 
                    {
                        echo '<img src="'.$img2.'" alt="Inverted Triangle Body Shape image" style="width:700px;height:400px;">

                        <br><br>
                        If you want more imformation about 
                        <a href="Inverted_Triangle_About.html">Inverted Triangle Body Shape</a>. <br>
                        Stay update with us. Because, We have a lot of details about fashion. 
                        Register with <a href="index.php">FitShape.lk</a> for more details.';
                    } 
                else if ($body_shape == "Spoon") 
                    {
                        echo '<img src="'.$img3.'" alt="Spoon Body Shape image" style="width:700px;height:400px;">

                        <br><br>
                        If you want more imformation about 
                        <a href="Spoon_About.html">Spoon Body Shape</a>. <br>
                        Stay update with us. Because, We have a lot of details about fashion. 
                        Register with <a href="index.php">FitShape.lk</a> for more details.';
                    }
                else if ($body_shape == "Rectangle") 
                    {
                        echo '<img src="'.$img4.'" alt="Rectangle Body Shape image" style="width:700px;height:400px;">

                        <br><br>
                        If you want more imformation about 
                        <a href="Rectangle_About.html">Rectangle Body Shape</a>. <br>
                        Stay update with us. Because, We have a lot of details about fashion. 
                        Register with <a href="index.php">FitShape.lk</a> for more details.';
                    } 
                else if ($body_shape == "Hourglass")
                    {
                        echo '<img src="'.$img5.'" alt="Hourglass Body Shape image" style="width:700px;height:400px;">

                        <br><br>
                        If you want more imformation about 
                        <a href="Hourglass_About.html">Hourglass Body Shape</a>. <br>
                        Stay update with us. Because, We have a lot of details about fashion. 
                        Register with <a href="index.php">FitShape.lk</a> for more details.';
                    }
            ?>
  
            <br>
            <br>      

		</form>
	</div>
</body>
</html>


