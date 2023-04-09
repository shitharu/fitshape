


<?php

//////////////////////////////////// don't want this page

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitshape";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$username = ""; $age = ""; $Image=""; $country = ""; $date = "";
$shoulder = ""; $bust = ""; $waist = ""; $hip = ""; $weight = ""; $height = "";
$email = ""; $password = ""; $re_password = "";

$arrType = array('jpeg','jpg','png');
$path = "PicZ/";

   // $Category=""; $Pname=""; $Image=""; $Gender=""; $Price="";  $Date="";  $MobileNo=""; $Location=""; $msg="";
    
   // $arrType = array('jpeg','jpg','png');
   // $path = "PicZ/";
    
    if(isset($_POST['btnSUBMIT'])){

		$username = $_POST['username'];
		$age = $_POST['age'];

		$temp_name = $_FILES['fileImage']['tmp_name'];
        $name = $_FILES['fileImage']['name'];
        $ext = explode(".",$name);

        $Image = $path.$name;

		$country = $_POST['country'];
		$date = $_POST['date'];

		$shoulder = $_POST['shoulder'];
		$bust = $_POST['bust'];
		$waist = $_POST['waist'];
		$hip = $_POST['hip'];

		$weight = $_POST['weight'];
		$height = $_POST['height'];

		$email = $_POST['email'];
		$password = $_POST['password'];
		$re_password = $_POST['re_password'];

        if(empty($username)||empty($age)||empty($Image)||empty($country)||empty($date)||
                empty($shoulder)||empty($bust)||empty($waist)||empty($hip)||
				empty($weight)||empty($height)||empty($email)||empty($password)){
            
                  echo "<script>alert('Filed can not be Empty!.')</script>";
        }else{
            if(in_array(strtolower($ext[1]),$arrType)){
                
				$sql="INSERT INTO user_details (username, age, image, country, date, shoulder, bust, waist, hip,
								weight, height, email, password) 
						VALUES ('".$username."', ".$age.", '".$Image."', '".$country."', '".$date."', 
								".$shoulder.", ".$bust.", ".$waist.", ".$hip.", ".$weight.", ".$height.",
								'".$email."', '".$re_password."')";

                if(mysqli_query($conn,$sql)){
                    move_uploaded_file($temp_name,$Image);

                    echo "<script>alert('Your details inserted!.')</script>";

                }else{

                   echo "<script>alert('Your details not inserted.Try Again.')</script>";
                }
            }
        }        
    }

    mysqli_close($conn);

?>
