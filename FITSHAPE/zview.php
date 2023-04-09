<?php
session_start();
 
// Redirect to the login page if the user is not logged in
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit;
}


$db = new mysqli('localhost', 'root', '', 'fitshape');

// Retrieve the user's details from the database
$username = $_SESSION['username'];
$query = "SELECT * FROM admin_login WHERE username = '$username'";
$result = $db->query($query);
$row = $result->fetch_assoc();
?>
 
<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>
<link rel="icon" href="images/logo/logo.PNG">

<style>

body {
  font-family: "Lato", sans-serif;
  background-size:cover;
  width: 100%; height: auto;
}

.sidenav {
  height: 100%;
  width: 240px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background:#C42C53;
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
      background:#C42C53;
      font-size:16px;
     }
	 
     div.dropdown-vertically li {
      position:relative;
     }
	 
     div.dropdown-vertically a { 
      display:block;
      text-decoration:none;
      padding:10px;
      color: #feffff;   // after selecting word color
      text-align: center; 
     }
	
     div.dropdown-vertically li:hover > a {
      background:#F04E78; // dashboard color
      color:#F1F1EF;      // button selecting color
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
  background-color:pink;
  color: #F1F1EF;

}

.dropdown-container {
  display: none;
  background-color:#F1F1EF;
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

 input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
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
  background-color: pink; 

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

input[type=text],input[type=file],input[type=date],select,textarea {
  width:100%;
  padding: 12px 20px;
  margin:10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


textarea{
  height:100px;
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
  background-color: #d8e2dc;
  width:198%;
  padding: 20px;
  margin-left:55%;
  margin-right:5%;
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

.redio{
text-align: center;
}

.b1{
  text-align:center;
  font:size 20px;
  width:100%;
  height:50px;
  color: #03045e;
  background:-webkit-linear-gradient(bottom,#caf0f8,#90e0ef,#00b4d8);
  border-radius:5px;
  border:none;
}

.b1:hover
{
  background: -webkit-linear-gradient(top,#caf0f8,#90e0ef,#00b4d8, #0077b6, #03045e);
}

#table1 {   
   border-collapse: separate;
   border-spacing: 0 15px;
   box-shadow: 8px ;
   transition: 0.3s;
   width:100%;
   border-radius:20px;
   background-color:bee1e6;
   font-family:Poppins;
}
 
.td 
{

    text-align: center;
    border: 1px;
    padding: 5px;
    margin: 10px;
}

#tableFixHead {
		overflow-y: auto;
		height:1000px;
		width:98%;
    margin-left:30px;
	  }
.tableFixHead thead th {
		position: sticky;
		top: 0;
	  }
</style>
</head>

<body>




<h2><img src="images/logo/logo.PNG" width="70"height="65" style="float:right; margin-right:50px;margin-top:-10px">ADMIN DASHBOARD</h2>

<ul class="ul" >
<li class="li"><a href="Home.html">Home</a></li>
<li class="li"><a href="About Us.html">About Us</a></li>
<li class="li"><a href="index.php">Login</a></li>
<li class="li"><a href="x.php">Body Shape Analyzer</a></li>
<li class="li"><a href="feedbacks.php">Feedbacks</a></li>

</ul>

<div class="sidenav">

  <div class="dropdown-vertically">


<br><br>
    <ul>
          <li><a class="active"href="adminprofile.php">Admin Dashboard</a></li>
          <li><a href="x.php">Add User</a></li>
          <li><a href="viewallusers.php">View All Users</a></li>
          <li> <a href="x.php">xxx</a></li>
          <li> <a href="x.php">View Feedback</a></li>
    </ul>
  </div>
</div>

aa


      
 <div class="col-md-12" style="width:100%" id="tableFixHead">
        <div class="row" style="margin-left:6%;margin-right:10%;padding:0;">
          <div class="col-md-12">
            <div class="col=md-12">
                <div class="row">

              <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitshape";

$con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM user_details";
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);

        if ($count > 0) {

            while ($row  = mysqli_fetch_assoc($res)) {


                $username = $row['username'];
                $email = $row['email'];

                $age = $row['age'];
                $image = $row['image'];
                $country = $row['country'];
                $date = $row['date'];

                $shoulder = $row['shoulder'];
                $bust = $row['bust'];
                $waist = $row['waist'];
                $hip = $row['hip'];
                $weight = $row['weight'];
                $height = $row['height'];
                
                $body_shape = $row['body_shape'];

                ?>
                   <div class="col-md-4" style="padding-top:30px;padding-bottom:0.5px;padding-left:30px;padding-right:30px;">
                   
                   <form method="get" action="zex1.php"?ID=<?=$row['email']?>">
                   <table id="table1">
                    <tr style="background-color:white">
                        
                        <tr><td><b>
                            <p name="name" class="text-center;" style="text-size:8px;text-align:center;"><?php echo $username;?></p></b></td></tr>
                        </b></td></tr>

                        <tr style="text-align:center;"><td> 
                            <a href="zex1.php?id=<?php echo $row['email'];?>"><img src="<?php echo $image;?>" alt="ff"style='height:200px;width:200;margin-bottom:20px;border-radius:20px;background-color:white;'>
                        </td></tr>

                        <tr><th>Age</th>
                            <td><p name="name" class="text-center;" style="text-size:8px;text-align:left;"><?php echo $age;?></p></b></td></tr>

                        <tr><th>Country</th>
                            <td><p name="name" class="text-center;" style="text-size:8px;text-align:left;"><?php echo $country;?></p></b></td></tr>

                        <tr><th>Date</th>
                            <td><p name="name" class="text-center;" style="text-size:8px;text-align:left;"><?php echo $date;?></p></b></td></tr>

                        <tr><th>Shoulder Size</th>
                            <td><p name="name" class="text-center;" style="text-size:8px;text-align:left;"><?php echo $shoulder;?> cm</p></b></td></tr>

                        <tr><th>Bust Size</th>
                            <td><p name="name" class="text-center;" style="text-size:8px;text-align:left;"><?php echo $bust;?> cm</p></b></td></tr>

                        <tr><th>Waist Size</th>
                            <td><p name="name" class="text-center;" style="text-size:8px;text-align:left;"><?php echo $waist;?> cm</p></b></td></tr>

                        <tr><th>Hip Size</th>
                            <td><p name="name" class="text-center;" style="text-size:8px;text-align:left;"><?php echo $hip;?> cm</p></b></td></tr>

                        <tr><th>Weight</th>
                            <td><p name="name" class="text-center;" style="text-size:8px;text-align:left;"><?php echo $weight;?> kg</p></b></td></tr>

                        <tr><th>Height</th>
                            <td><p name="name" class="text-center;" style="text-size:8px;text-align:left;"><?php echo $height;?> m</p></b></td></tr>

                        <tr><th>Body Shape</th>
                            <td><p name="name" class="text-center;" style="text-size:8px;text-align:left;"><?php echo $body_shape;?></p></b></td></tr>

                        </tr>
                    
                     </table>
                
                    </form>
                   
                  </div>
                <?php

            }
        }else {
            echo "<div class='errormsg'>
                There are details....
            </div>";
        }

            ?>
                </div>
                </div>
            </div>
            </div>
          </div>
 

<br>



// for the note


  <h1>Admin Profile</h1>

  login<br>insert users<br>search users<br>view all users<br>view feedbacks<br>delete users
  <table>
    <tr>
      <th>ID</th>
      <td><?php echo $row['id']; ?></td>
    </tr>
    <tr>
      <th>Username</th>
      <td><?php echo $row['username']; ?></td>
    </tr>
    <tr>
      <th>Password</th>
      <td><?php echo $row['password']; ?></td>
    </tr>
    
  </table>



</body>
</html>
