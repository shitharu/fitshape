<html>

<head>
    <title>Search User</title>
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

          <li><a href="add_user.php">Add User</a></li>
          <li><a href="viewallusers.php">View All Users</a></li>
          <li><a class="active" href="searchuser.php">Search User</a></li>
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

$usernamee = ""; $email = ""; $age = ""; $country = ""; $date = "";
$shoulder = ""; $bust = ""; $waist = ""; $hip = "";
$weight = ""; $height = "";
$body_shape = ""; $xbody_shape = "";


if(isset($_POST['btnSearch'])){

    $email = $_POST['email'];

        $sql = "SELECT * FROM user_details WHERE email LIKE '%$email%'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_row($result);

            $usernamee = $row[0];
            $age = $row[2];
            $Image = $row[4];
            $country = $row[5];
            $date = $row[6];
            $shoulder = $row[7];
            $bust = $row[8];
            $waist = $row[9];
            $hip = $row[10];
            $weight = $row[11];
            $height = $row[12];

            $body_shape = $row[13];

        }else{
            echo "<script>alert('Sorry. User Record Not Found !!')</script>";
        }
}











if(isset($_POST['btnUpdate'])){

        $email = $_POST['email']; // something wrong in this function

        if(empty($email)){
          echo "<script>alert('Filed can not be Empty!.')</script>";
        }else{

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
          $xbody_shape = "Pear";
          } elseif ($shoulder_to_hip_ratio > 1.25 && $bust_to_waist_ratio < 0.75) {
          $xbody_shape = "Inverted Triangle";
          } elseif ($shoulder_to_hip_ratio < 0.8 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
          $xbody_shape = "Spoon";
          } elseif ($shoulder_to_hip_ratio >= 0.8 && $shoulder_to_hip_ratio <= 1.25 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
          $xbody_shape = "Rectangle";
          } else {
          $xbody_shape = "Hourglass";
          }
          

          if(empty($email)||empty($usernamee)||empty($age)||empty($country)||empty($date)||
                    empty($shoulder)||empty($bust)||empty($waist)||empty($hip)||
            empty($weight)||empty($height)||empty($xbody_shape)){
                
                      echo "<script>alert('Filed can not be Empty!.')</script>";
          }
          else{
            //if(10 < $age && $age < 120){
                  $sql ="UPDATE user_details SET (username, age, country, date, shoulder, bust, waist, hip,
                                                    weight, height, body_shape) 
                                                VALUES ('".$usernamee."', ".$age.", '".$country."', '".$date."', 
                                                    ".$shoulder.", ".$bust.", ".$waist.", ".$hip.", ".$weight.", ".$height.",
                                                     '".$xbody_shape."') WHERE email=".$email;





            //}else{
                 //   echo "<script>alert('For you to register in this system,<br> your age should be between 10 and 120 years.')</script>";
                 echo "<script>alert('For you to register in this system,<br> your age should be between 10 and 120 years.')</script>";
                }  
            //}
    
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
			<input type="email" name="email" required="" style="height:50px;" value="<?php echo $email; ?>">
            <input type="submit" name="btnSearch" value="SEARCH" style="height:50px; width:100px;">
            <input type="submit" name="btnUpdate" value="UPDATE" style="height:50px; width:100px;">
            <input type="reset" name="btnCLEAR" value="CLEAR ALL" style="height:50px; width:100px;">   
		</div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Username</th>
      <td>
        <div class="user-box">
			<input type="text" name="username" style="height:50px;" value="<?php echo $usernamee; ?>">
		</div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Image</th>
      <td><br>
        <img src="<?php echo $Image; ?>" alt="ff"style='height:200px;width:200;margin-bottom:20px;border-radius:20px;background-color:white;'></td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Age</th>
      <td>
        <div class="user-box">
			<input type="number" name="age" style="height:50px;" value="<?php echo $age; ?>">
		</div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Country</th>
      <td>
        <div class="user-box">
				  <input type="text" name="country" style="height:50px;" value="<?php echo $country; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Date</th>
      <td>
        <div class="user-box">
				  <input type="date" name="date" style="height:50px;" value="<?php echo $date; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Shoulder Size</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="shoulder" style="height:50px;" value="<?php echo $shoulder; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Bust Size</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="bust" style="height:50px;" value="<?php echo $bust; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Waist Size</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="waist" style="height:50px;" value="<?php echo $waist; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Hip Size</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="hip" style="height:50px;" value="<?php echo $hip; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Weight</th>
      <td>
        <div class="user-box">
        <input type="number" step="0.01" name="weight" style="height:50px;" value="<?php echo $weight; ?>">
			  </div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Height</th>
      <td>
        <div class="user-box">
            <input type="number" step="0.01" name="height" style="height:50px;" value="<?php echo $height; ?>">
		</div>
      </td>
    </tr>

    <tr style="background-color:#caf0f8;height:70px;">
      <th>Body Shape</th>
      <td>
        <div class="user-box">
            <input type="text" name="bodyshape" style="height:50px;" value="<?php echo $body_shape; ?>">
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



