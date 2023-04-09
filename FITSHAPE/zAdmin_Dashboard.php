<?php 

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: LoginPage.php");
}

?>

<html>

<head>

<title>Registration Pets</title>
<link rel="icon" href="image/homepage/icon/logo.png">

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
</style>
</head>

<body>

<?php

$db_host = 'localhost';
$db_name = 'fitshape';
$db_user = 'root';
$db_pass = '';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}


    /*include('DB_fitshape.php');
    $con = get_connection();*/

$username=""; $email=""; $password=""; $age=""; $image=""; $country=""; $date=""; 
$shoulder=""; $bust=""; $waist=""; $hip=""; $weight=""; $height=""; $body_shape=""; $msg="";

$arrType = array('jpeg','jpg','png');
$path = "PicZ/";

if(isset($_POST['btnSUBMIT'])){

    $username = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    $age = $_POST['txtAge'];
    
    $temp_name = $_FILES['fileImage']['tmp_name'];
    $name = $_FILES['fileImage']['name'];
    $ext = explode(".",$name);

    $image = $path.$name;

    $country = $_POST['txtCountry'];
    $date = $_POST['txtDate'];

    $shoulder = $_POST['txtShoulder'];
    $bust = $_POST['txtBust'];
    $waist = $_POST['txtWaist'];
    $hip = $_POST['txtHip'];
    $weight = $_POST['txtWeight'];
    $height = $_POST['txtHeight'];

    $body_shape = $_POST['txtBodyShape'];


    if(empty($username)||empty($email)||empty($password)||empty($age)||empty($image)||empty($country)||
            empty($date)||empty($shoulder)||empty($bust)||empty($waist)||empty($hip)||empty($weight)||
            empty($height)||empty($body_shape)){
        
              echo "<script>alert('Filed can not be Empty!.')</script>";
    }else{
        if(in_array(strtolower($ext[1]),$arrType)){
         
            $sql="INSERT INTO user_body_shape( username,email, password, age, image, country, date, shoulder, bust, waist, hip, weight, height, body_shape) 
            VALUES('" .$username. "' , '" .$email. "', '" .$password. "' ,
                  " .$age. " , '".$image. "' , '" .$country. "' , '" .$date. "' ,
                  " .$shoulder. " , ".$bust. " , " .$waist. " , " .$hip. " , " .$weight. ", " .$height. ",
                  '" .$body_shape. "')";


            if(mysqli_query($con,$sql)){
                move_uploaded_file($temp_name,$Image);

                echo "<script>alert('Your details inserted!.')</script>";

            }else{

               echo "<script>alert('Your details not inserted.Try Again.')</script>";
            }
        }
    }        
}

mysqli_close($con);

?>

<h2><img src="image/homepage/categoires/fulllogo_01.png" width="70"height="65" style="float:right; margin-right:50px;margin-top:-10px">ADMIN DASHBOARD</h2>

<div class="sidenav">

  <div class="dropdown-vertically">

  <?php echo "<h5>WELCOME  <br>". $_SESSION['email'] . "</h5>"; ?>

  </div>
</div>

   <table class="table table-borderless">

<tbody>
  <tr>
    <td>
  
  <div class="div1"> 
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <br>
    <h3 style="text-align:center;margin-right:50px;font-size:xx-large">REGISTRATION</h3>

    <br>
    <div>
                    <label>User Name :</label>
                    <input type="text" name="txtUsername" placeholder="Username"required>
                </div><br>
                
                <div>
                    <label>Email Address :</label>
                    <input type="text" name="txtEmail" placeholder="Email"required>
                </div><br>

                <div>
                    <label>Password :</label>
                    <input type="text" name="txtPassword" placeholder="Password"required>
                </div><br>

                <div>
                    <label>Age :</label>
                    <input type="text" name="txtAge" placeholder="Age"required>
                </div><br>

                <div class="form-label">Choose Image :</label>
                  <input type="file" name="fileImage">
                </div><br>

                <div>
                    <label>country :</label>
                    <input type="text" name="txtCountry" placeholder="Country"required>
                </div><br>

                <div>
                    <label class="form-label">Date :</label>
                    <input type="date"  name="txtDate">
                </div><br>


                <div>
                    <label>Shoulder :</label>
                    <input type="text" name="txtShoulder" placeholder="Shoulder"required>
                </div><br>
                <div>
                    <label>Bust :</label>
                    <input type="text" name="txtBust" placeholder="Bust"required>
                </div><br>
                <div>
                    <label>Waist :</label>
                    <input type="text" name="txtWaist" placeholder="Waist"required>
                </div><br>
                <div>
                    <label>Hip :</label>
                    <input type="text" name="txtHip" placeholder="Hip"required>
                </div><br>
                <div>
                    <label>Weight :</label>
                    <input type="text" name="txtWeight" placeholder="Weight"required>
                </div><br>

                <div>
                    <label>Height :</label>
                    <input type="text" name="txtHeight" placeholder="Height"required>
                </div><br>
                <div>
                    <label>Body Shape Type :</label>
                    <input type="text" name="txtBodyShape" placeholder="BodyShape"required>
                </div><br>
               
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" name="btnSUBMIT" value="Insert" class="b1"><b>SUBMIT</b></button>
                </div>
                <br>

    </form>
    </div>
    <br><br>

</body>
</html>