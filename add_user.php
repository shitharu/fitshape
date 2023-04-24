<?php

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
		
		// Calculate the user's body shape
		$shoulder_to_hip_ratio = $shoulder / $hip;
		$bust_to_waist_ratio = $bust / $waist;

		if ($shoulder_to_hip_ratio < 0.8 && $bust_to_waist_ratio < 0.75) {
			$body_shape = "Pear";
		  } elseif ($shoulder_to_hip_ratio > 1.25 && $bust_to_waist_ratio < 0.75) {
			$body_shape = "Inverted Triangle";
		  } elseif ($shoulder_to_hip_ratio < 0.8 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
			$body_shape = "Spoon";
		  } elseif ($shoulder_to_hip_ratio >= 0.8 && $shoulder_to_hip_ratio <= 1.25 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
			$body_shape = "Rectangle";
		  } else {
			$body_shape = "Hourglass";
		  }


        if(empty($username)||empty($age)||empty($Image)||empty($country)||empty($date)||
                empty($shoulder)||empty($bust)||empty($waist)||empty($hip)||
				empty($weight)||empty($height)||empty($email)||empty($password)||empty($re_password)){
            
                  echo "<script>alert('Filed can not be Empty!.')</script>";
        }else{
			if(10 < $age && $age < 120){
				if($password==$re_password){
					if(in_array(strtolower($ext[1]),$arrType)){
					
						$sql="INSERT INTO user_details (username, age, image, country, date, shoulder, bust, waist, hip,
										weight, height, email, password, body_shape) 
								VALUES ('".$username."', ".$age.", '".$Image."', '".$country."', '".$date."', 
										".$shoulder.", ".$bust.", ".$waist.", ".$hip.", ".$weight.", ".$height.",
										'".$email."', '".$re_password."', '".$body_shape."')";
		
						if(mysqli_query($conn,$sql)){
							move_uploaded_file($temp_name,$Image);
		
							echo "<script>alert('Your details inserted!.')</script>";	
														
						}else{
		
						   echo "<script>alert('Your details not inserted.Try Again.')</script>";
						}
					}
				}else{
					echo "<script>alert('Password is wrong')</script>";
				}
			}else{
				echo "<script>alert('For you to register in this system,<br> your age should be between 10 and 120 years.')</script>";
			}  
        }        
    }

    mysqli_close($conn);

?>
 



<html>

<head>
    <title>User Registration Page</title>
    <link rel="icon" href="images/logo/logo.png">

<style>

body {
  font-family: "Lato", sans-serif;
  background-size:cover;
  background-image: url("https://images.pexels.com/photos/370799/pexels-photo-370799.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
}

.sidenav {
  height: 100%;
  width: 240px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background:#a1caf1;
  padding-top: 26px;
}

     * {
      padding:0;
      margin:0;
     }
	  
     div.dropdown-vertically {
      margin-top:25px;
      margin-bottom:20px;
      position:relative;
      width:240px;
     }
	 
     div.dropdown-vertically ul {
      list-style: none;
      background:#a1caf1;
      font-size:16px;
     }
	 
     div.dropdown-vertically li {
      position:relative;
     }
	 
     div.dropdown-vertically a { 
      display:block;
      text-decoration:none;
      padding:10px;
      color: #feffff;
      text-align: center; 
     }
	
     div.dropdown-vertically li:hover > a {
      background:#457b9d;
      color:#F1F1EF;
     }
	 
     div.dropdown-vertically ul ul {
      position:absolute;
      top:0;
      width:100%;
      visibility:hidden;
     }
	 
     div.dropdown-vertically li:hover > ul {
      left:100%;
      visibility:visible;
     }
.main {
  margin-left: 200px; 
  font-size: 15px; 

}

.active {
  background-color:#457b9d;
  color: #006a66;

}

.dropdown-container {
  display: none;
  background-color:#457b9d;
  padding-left: 8px;
}

.fa-caret-down {
  float: right;
  padding-right: 8px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


.dropdown-container1 {
  display: none;
  background-color: #457b9d;
  padding-left: 15px;
}

.fa-caret-down1 {
  float: right;
  padding-right:15px;
}

h5{
  color:#457b9d;
  text-align: center; 
}

h2{
  margin-top:0px;
  text-align:center; 
  border-color:#add8e6;
  padding-top: 25px;
  padding-left:200px;
  padding-bottom: 5px;
  height:52px;
  margin-right:-10px;
  border: 2px;
  background:#abcdef;
}

.column {
  float:left;
  width: 20%;
  padding: 10px;
  margin-left:35px;
  margin-top:10px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width:1000px) {
  .column {
    width: 100%;
  }
}

.card {
      box-shadow: 0 4px 8px 0 #dddfd4;
      transition: 0.3s;
      content: center;
      width: 150px;
      height: 180px;
      margin-left:20px;
      padding:10px;
    }
    
    .card:hover {
      box-shadow: 0 8px 16px 0 white;
      background:#def2f1;
    }
    
    .container {
      padding: 2px 16px;
    }

  h1{
   
    margin-top: 100px;  
    text-align: center;
    width:20px;
  }  

  h6{
   
   margin-top: 10px;  
   text-align: center;
 }  

 h5{
   
   margin-top: -19px;  
   text-align: center;
   color: #feffff;
 } 


  .success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 50px;
   height:20px;
   border-radius: 5px;
   margin: 20px auto;
}


.tableFixHead {
		overflow-y: auto;
		height: 150px;
		width: 98%;
	  }
.tableFixHead thead th {
		position: sticky;
		top: 0;
	  }
	

 .ul {
  list-style-type: none;
  margin-right:-10px;
  padding: 0;
  overflow: hidden;
  background-color:61a5c2; 

}

.li { 
  border-right:1px #b0c4de;
  float:right;
  padding-right: 8px;
}


.li a {
  display: block;
  color: white;
  text-align: center;
  padding: 10.5px 10px;
  text-decoration: none;
}

.button1 {
  
  background: -webkit-linear-gradient(right, #3aafa9, #2b7a78,#17252a);
  padding: 10px 15px;
  color: #fff;
  height: 40px;
  border-radius:8px;
  text-decoration:none;
  float:center;
  border:none;  
  width:100px;
  padding:2px;
  text-decoration:none;
  margin-left:-150px;

}
.button1:hover{
	opacity: .7;
}

.button2 {
  
  background: -webkit-linear-gradient(right, #3aafa9, #2b7a78,#17252a);
  padding: 10px 15px;
  color: #fff;
  height: 40px;
  border-radius:8px;
  text-decoration:none;
  float:center;
  border:none;  
  width:100px;
  padding:5px;
  text-decoration:none;
  margin-right:-180px;
  margin-left: 20px;
  margin-top: -30px;
}
.button2:hover{
	opacity: .7;
}
.style1{
    width:10%;
    margin-top:10px;
}

.name{
    text-align: center;
    font-family:monospace;
    padding-top:10px;
}

input[type=text],input[type=file],input[type=date],select {
  width:100%;
  padding: 12px 20px;
  margin:10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width:100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.div1 {
  border-radius: 5px;
  width:198%;
  padding: 20px;
  margin-left:55%;
  margin-right:5%;
}

.div2 {
  border-radius: 5px;
  width:76%;
  padding: 20px;
  margin-left:20%;
  margin-right:1%;
}

.select1 {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size:18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height:20px;
  width: 20px;
  background-color:#bcd4e6;
  border-radius: 50%;
}

.tableFixHead {
		overflow-y: auto;
		height: 570px;
		width:97%;
       margin-left:10px;
}

.tableFixHead thead th {
		position: sticky;
		top: 0;
	  }

.container:hover input ~ .checkmark {
  background-color: #ccc;
}

.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.container input:checked ~ .checkmark:after {
  display: block;
}

.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width:4px;
	height:4px;
	border-radius:50%;
	background: white;
}

.table1 {   
   border-collapse: separate;
   border-spacing: 0 15px;
   box-shadow: 8px ;
   transition: 0.3s;
}
 
.td 
{
    width: 150px;
    text-align: center;
    border: 1px;
    padding: 5px;
    margin: 10px;
}

.style1
{
   
   text-align:left;
   padding-bottom: 1px;
   background: none;
   border-color: none;
}      

input {
		border: 0px solid;
		height: 20px;
		width: 160px;
 		color: black;

}

textarea:focus, input:focus{
		 	   outline: none;
			}


   .success {
   background: #D4EDDA;
   color: #40754C;
   text-align: center;
   padding:12px;
   width: 97%;
   border-radius: 5px;
   margin-left: 10px;
   margin-right: 10px;
}
.error {
    background: #d8bebe;
	  color: #ad3b3a;
   padding: 8px;
   text-align: center;
   width: 94%;
   border-radius: 5px;
   margin-left: 100px;
   margin-right: 140px;
}

.button1
{
  background: #48cae4;
  color: #1d3557;
  padding: 10px;
  width:200px;
  border-radius: 5px;
  text-align: center;
  
}

</style>
</head>

<body>

<h2><img src="images/logo/logo.png" width="70"height="65" style="float:right; margin-right:50px;margin-top:-10px">ADMIN DASHBOARD</h2>

<ul class="ul" >
<li class="li"><a href="Home.html" style="padding-right: 50px;">Home</a></li>
<li class="li"><a href="About Us.html">About Us</a></li>
<li class="li"><a href="indexadmin.php">Login</a></li>

</ul>

<div class="sidenav">

  <div class="dropdown-vertically">


<br><br>
    <ul>
          <li><a href="blankadmin.php">Admin Dashboard</a></li>
          <li><a href="adminpp.php">Admin Profile</a></li>
          <li><a href="registeradmin.php">Add an Admin</a></li>
          <li><a href="adminprofile.php">View All Admins</a></li>
          <li><a href="searchadmin.php">Search Admin</a></li>
          
          <br><br><br><br>

          <li><a class="active" href="add_user.php">Add User</a></li>
          <li><a href="viewallusers.php">View All Users</a></li>
          <li><a href="searchuser.php">Search User</a></li>
          <li><a href="viewallfeedbacks.php">View All User Feedbacks</a></li>
          <li><a href="contact_msg.php">View All User Messages</a></li>
          
    </ul>
  </div>
</div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitshape";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
    
?>

<br>

<div class="tableFixHead">
<table class="table1" id="myTable" style="margin-left:20%;width:80%;" >
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Username</th>
      <td>
        <div class="user-box">
				  <input type="text" name="username" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Age</th>
      <td>
        <div class="user-box">
				  <input type="number" name="age" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Choose Image</th>
      <td>
        <div class="user-box">
				  <input type="file" name="fileImage" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Country</th>
      <td>
        <div class="user-box">
				  <input type="text" name="country" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Date</th>
      <td>
        <div class="user-box">
				  <input type="date" name="date" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Shoulder Size (cm)</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="shoulder" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Bust Size (cm)</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="bust" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Waist Size (cm)</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="waist" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Hip Size (cm)</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="hip" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Weight (kg)</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="weight" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Height (m)</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="height" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#457b9d;height:70px;">
      <th></th>
      <td>
        
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Email</th>
      <td>
        <div class="user-box">
				  <input type="email" name="email" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Password</th>
      <td>
        <div class="user-box">
				  <input type="password" name="password" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Repeat Your Password</th>
      <td>
        <div class="user-box">
				  <input type="password" name="re_password" required="" style="height:50px;">
			  </div>
      </td>
    </tr>

    <tr>
      <th></th>
      <td>
        <input type="submit" name="btnSUBMIT" value="Register" style="height:50px; width:100px;">
        <input type="reset" name="btnCLEAR" value="Clear All" style="height:50px; width:100px;">
      </td>
    </tr>



</form>
</table>
	</div>


</body>
</html>




