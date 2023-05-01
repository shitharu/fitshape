<?php
session_start();
 
// Redirect to the login page if the user is not logged in
if (!isset($_SESSION['email'])) {
  header('Location: index.php');
  exit;
}


$db = new mysqli('localhost', 'root', '', 'fitshape');

// Retrieve the user's details from the database
$email = $_SESSION['email'];
$query = "SELECT * FROM user_details WHERE email = '$email'";
$result = $db->query($query);
$row = $result->fetch_assoc();


?>
 


<html>

<head>
    <title>User Profile</title>
    <link rel="icon" href="images/logo/logo.png">

<style>

body {
			font-family: "Lato", sans-serif;
			background-size:cover;
			background-image: url("https://img.freepik.com/free-photo/abstract-luxury-gradient-blue-background-smooth-dark-blue-with-black-vignette-studio-banner_1258-56228.jpg?w=826&t=st=1682794873~exp=1682795473~hmac=d73405c7d47f78db6f22c90ef31fec858974c57c604d64cb335fb31113c8d6c4");
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

<h2><img src="images/logo/logo.png" width="70"height="65" style="float:right; margin-right:50px;margin-top:-10px">USER DASHBOARD</h2>

<ul class="ul" >
<li class="li" style="padding-right: 50px;"><a href="Home.html">Home</a></li>
<li class="li"><a href="About Us.html">About Us</a></li>
<li class="li"><a href="index.php">Login</a></li>

</ul>

<div class="sidenav">

  <div class="dropdown-vertically">


<br><br>
    <ul>
          <li><a href="profile.php" class="active">Profile</a></li>          
          <li><a href="image_classification.php">AI Body Shape Analyzer</a></li>
          <li><a href="viewallfeedbacksuser.php">View Feedbacks</a></li>
          <li><a href="feedbacks.php">Add Feedback</a></li>
          <li><a href="contact_us.php">Help</a></li>
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
    

if(isset($_POST['btnUpdate'])){

  $email = $_POST['email'];

  $usernamee = $_POST['username'];
  $age = $_POST['age'];
  $country = $_POST['country'];
  $date = $_POST['date'];

  $shoulder = $_POST['shoulder'];
  $bust = $_POST['bust'];
  $waist = $_POST['waist'];
  $hip = $_POST['hip'];

  $weight = $_POST['weight'];
  $height = $_POST['height'];

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
    
  if(10 < $age && $age < 120){
         
  $sql = "UPDATE user_details SET username = '$usernamee', age = '$age', country = '$country', date = '$date', shoulder = '$shoulder', bust = '$bust', waist = '$waist', hip = '$hip', weight = '$weight', height = '$height', body_shape = '$body_shape' WHERE email = '$email'";                  

  if(mysqli_query($con,$sql)){
        echo "<script>alert('User Details Updated successfully!')</script>";
      }else{
        echo "<script>alert('Error: ')</script>". mysqli_error($con);
      }

  } else{
    echo "<script>alert('For you to register in this system, your age should be between 10 and 120 years.')</script>";
  } 

}


if(isset($_POST['btnDelete'])){

  $email = $_POST['email'];

  $sql ="DELETE FROM user_details WHERE email='$email'";
  
  if(mysqli_query($con,$sql)){
      echo "<script>alert('User deleted successfully!')</script>";
  }else{
      echo "<script>alert('Error deleting user: ')</script>". mysqli_error($con);
   }
}




?>

<br>

<div class="tableFixHead">
<table class="table1" id="myTable" style="margin-left:20%;width:80%;" >
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">


    <tr style="background-color:#caf0f8;height:70px;">
      <th>Email</th>
      <td>
        <div class="user-box">
			    <input type="email" name="email" required="" style="height:50px; width:200px;" value="<?php echo $email; ?>">
            <input type="submit" name="btnSearch" value="REFRESH" style="height:50px; width:100px;">
            <input type="submit" name="btnUpdate" value="UPDATE" style="background:blue; height:50px; width:100px;">
            <input type="submit" name="btnDelete" value="DELETE" style="background:red; height:50px; width:100px;">
            <input type="reset" name="btnReset" value="RESET" style="background:yellow; height:50px; width:100px;">  
        </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Username</th>
      <td>
        <div class="user-box">
			<input type="text" name="username" style="height:50px;" value="<?php echo $row['username'] ?>">
		</div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Image</th>
      <td><br>
        <img src="<?php echo $row['image']; ?>" alt="ff"style='height:200px;width:200;margin-bottom:20px;border-radius:20px;background-color:white;'></td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Age</th>
      <td>
        <div class="user-box">
			<input type="number" name="age" style="height:50px;" value="<?php echo $row['age']; ?>">
		</div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Country</th>
      <td>
        <div class="user-box">
				  <input type="text" name="country" style="height:50px;" value="<?php echo $row['country']; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Date</th>
      <td>
        <div class="user-box">
				  <input type="date" name="date" style="height:50px;" value="<?php echo $row['date']; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Shoulder Size</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="shoulder" style="height:50px;" value="<?php echo $row['shoulder']; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Bust Size</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="bust" style="height:50px;" value="<?php echo $row['bust']; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Waist Size</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="waist" style="height:50px;" value="<?php echo $row['waist']; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Hip Size</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="hip" style="height:50px;" value="<?php echo $row['hip']; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Weight</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="weight" style="height:50px;" value="<?php echo $row['weight']; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Height</th>
      <td>
        <div class="user-box">
            <input type="number" step="0.01" name="height" style="height:50px;" value="<?php echo $row['height']; ?>">
		</div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Body Shape</th>
      <td>
        <div class="user-box">
            <input type="text" name="bodyshape" style="height:50px;" value="<?php echo $row['body_shape']; ?>">
		</div>
      </td>
    </tr>

    <tr style="background-color:#457b9d;height:70px;">
      <th></th>
      <td>
        
      </td>
    </tr>

</form>
</table>

	</div>


</body>
</html>







