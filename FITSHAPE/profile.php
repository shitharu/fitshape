<?php
session_start();
 
// Redirect to the login page if the user is not logged in
if (!isset($_SESSION['email'])) {
  header('Location: login.php');
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
    <title>View All Feedbacks</title>
    <link rel="icon" href="images/logo/logo.png">

<style>

body {
  font-family: "Lato", sans-serif;
  height: 100%;
  width: 100%;
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
<li class="li"><a href="x.php">Body Shape Analyzer</a></li>
<li class="li"><a href="feedbacks.php">Feedbacks</a></li>

</ul>

<div class="sidenav">

  <div class="dropdown-vertically">


<br><br>
    <ul>
          <li><a href="profile.php" class="active">Profile</a></li>
          <li><a href="viewallfeedbacksuser.php">User Feedbacks</a></li>
          <li><a href="feedbacks.php">Add Feedback</a></li>
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

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Email</th>
      <td><?php echo $row['email']; ?></td>
    </tr>
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Username</th>
      <td><?php echo $row['username']; ?></td>
    </tr>
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Age</th>
      <td><?php echo $row['age']; ?> years old</td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Image</th>
      <td>
        <img src="<?php echo $row['image']; ?>" alt="ff"style='height:200px;width:200;margin-bottom:20px;border-radius:20px;background-color:white;'></td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Country</th>
      <td><?php echo $row['country']; ?></td>
    </tr>
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Date</th>
      <td><?php echo $row['date']; ?></td>
    </tr>
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Shoulder</th>
      <td><?php echo $row['shoulder']; ?> inch</td>
    </tr>
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Bust</th>
      <td><?php echo $row['bust']; ?> inch</td>
    </tr>
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Waist</th>
      <td><?php echo $row['waist']; ?> inch</td>
    </tr>
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Hip</th>
      <td><?php echo $row['hip']; ?> inch</td>
    </tr>
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Weight</th>
      <td><?php echo $row['weight']; ?> kg</td>
    </tr>
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Height</th>
      <td><?php echo $row['height']; ?> m</td>
    </tr>
    <tr style="background-color:#caf0f8;height:70px;">
      <th>Body Shape</th>
      <td><?php echo $row['body_shape']; ?> Body Shape</td>
    </tr>

</table>
	</div>


</body>
</html>
