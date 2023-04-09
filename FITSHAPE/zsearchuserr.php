<html lang="en">
  <head>

    <title>Search User's Details</title>
    <link rel="icon" href="image/homepage/icon/logo.png">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css"> 

 <style>
      .banner-image {
        background-image: url('img/banner-img.jpg');
        background-size: cover;
      }

   
    .header{
     background:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://i.postimg.cc/YjcJg24M/aa.jpg) ;
     height: 400px;;
     -webkit-background-size: cover;
     background-size: cover;
     background-position: center center;
     position: relative;
     margin:0;
   
     }

  .navbar{
  width:100%;
	position: fixed;
	top: 0px;
	text-align: center;
	transition: .5s;
}

.navbar ul li{	
	display:inline-block;
	padding:20px 30px;
	color: white;
	font-size: 24px;
    text-decoration: none;
	font-family: sans-serif;
	cursor: pointer;
	border-radius:10px;
	transition: .5s;
	}


.navbar ul li:hover{
	background:#023e8a;
  padding:10px 30px;
    
	}
      
.nav-area {
	float: right;
	list-style: none;

}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color:black;
	text-decoration: none;
	padding: 5px 5px;
	font-family: poppins;
	font-size: 16px;
	text-transform: uppercase;
}
.nav-area li a:hover {

	color:white;
}
    


.logo {
	float: left;
}
.logo img {
	width: 50px;
	padding-left: 20px 0;
}

 .logo {
  float: left;
  width: 120px;
  margin-left: 10px;
  margin-top:-5px;;
}
.logo img {
	width: 100%;
	padding: 15px 0;
} 

@media (max-width:600px) {
	.wrapper {
		width: 100%;
	}
	.logo {
		float: none;
		width: 50%;
		text-align: center;
		margin: auto;
	}
	
	.nav-area {
		float: none;
		margin-top: 0;
	}
	.nav-area li a {
		padding: 5px;
		font-size: 11px;
	}
	.nav-area {
		text-align: center;
	}
	.welcome-text {
		width: 100%;
		height: auto;
		margin: 30% 0;
	}
	.welcome-text h1 {
		font-size: 30px;
	}
}

.cover{
  background: url('image/homepage/categoires/bk.png') ;
  padding: top 50px ;
  padding-bottom: 50px;
	-webkit-background-size: cover;
	background-size: cover;
  }

  .footer-dark {
    padding:50px 0;
    color:#264653;
    background:#ddd;
    background-repeat:no-repeat;
    
  }
  
  .footer-dark h3 {
    margin-top:0;
    margin-bottom:12px;
    font-weight:bold;
    font-size:16px;
  }
  
  .footer-dark ul {
    padding:0;
    list-style:none;
    line-height:1.6;
    font-size:14px;
    margin-bottom:0;
  }
  
  .footer-dark ul a {
    color:inherit;
    text-decoration:none;
    opacity:0.6;
  }
  
  .footer-dark ul a:hover {
    opacity:0.8;
  }
  
  @media (max-width:767px) {
    .footer-dark .item:not(.social) {
      text-align:center;
      padding-bottom:20px;
    }
  }
  
  .footer-dark .item.text {
    margin-bottom:36px;
  }
  
  @media (max-width:767px) {
    .footer-dark .item.text {
      margin-bottom:0;
    }
  }
  
  .footer-dark .item.text p {
    opacity:0.6;
    margin-bottom:0;
  }
  
  .footer-dark .item.social {
    text-align:center;
  }
  
  @media (max-width:991px) {
    .footer-dark .item.social {
      text-align:center;
      margin-top:20px;
    }
  }
  
  .footer-dark .item.social > a {
    font-size:20px;
    width:36px;
    height:36px;
    line-height:36px;
    display:inline-block;
    text-align:center;
    border-radius:50%;
    box-shadow:0 0 0 1px rgba(255,255,255,0.4);
    margin:0 8px;
    color:#264653;
    opacity:0.75;
  }
  
  .footer-dark .item.social > a:hover {
    opacity:0.9;
  }
  
  .footer-dark .copyright {
    text-align:center;
    padding-top:24px;
    opacity:0.3;
    font-size:13px;
    margin-bottom:0;
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

.banner-image {
    background-image: url('image/homepage/Cover Image/23.png');
    background-size: cover;
    margin-top: -20px;
}   

input[type="submit"]  {
    
    background: none;
    -webkit-appearance: none;
    background-color: black;
    border: 0;
    color: white;
}

.errormsg{
   text-align:center;
   margin-top:10%;
   margin-left: 34%;
   font-weight: 500;
   color:red;
   background:#fcd5ce;
   padding-top:20px;
   padding-bottom:20px;
   padding-left:30px;
   padding-right:30px;
}


</style>

 </head>

  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">

<header>
<div class="navbar" id='nav'>
    <div class="logo">
        <img src="image/homepage/categoires/logoword titlebar.png" alt="" style="margin-left:-200px;">
    </div>
<ul class="nav-area">
<li><a  class="active" href="HomeHome.php">Home</a></li>
<li><a href="About Us.php">About</a></li>
<li><a href="LoginPage.php">Login</a></li>
<li><a href="DonatePage.php">Donate</a></li>
<li style="margin-right:120px;"><a href="SearchAnimal.php">Search</a></li>
</ul>
   </div>

</div>

<script type="text/javascript">
     
     var  nav = document.getElementById('nav');
     
     window.onscroll = function(){

       if (window.pageYOffset >100) {

         nav.style.background = "#00b4d8";
         nav.style.boxShadow = "0px 2px 2px #00b4d8";
         nav.style.height="80px";
         nav.style.paddingTop="15px";
         nav.style.opacity=".7";
       }
       else{
        nav.style.background = "transparent";
         nav.style.boxShadow = "none";
       }
     }

</script> 


</header>      
      </div>
    </nav>

<form method="post" class=" d-flex py-3">
<div class="banner-image w-100 d-flex " style="height:400px;">

<input type="text" name="searchemail" placeholder="Enter Email Address"style="float:left;width:400px;height:40px;border-radius:20px;padding:20px;margin-top:20%;margin-left:80px;border-color:#00b4d8;background-color:white"required/></td>
<input type="submit" value="Search" name="btnSearch"style="float:left;width:10%;height:45px;text-align:center;margin-top:20%;margin-left:-30px;border-radius:20px;border-color:none;border:none;background-color:#00b4d8;color:white;"/></td>

</div>
</form> 


<?php if (isset($_GET['error'])) { ?>

 <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>

  <?php if (isset($_GET['success'])) { ?>
       <p class="success"><?php echo $_GET['success']; ?></p>
  <?php } ?>

<div class="container-fluid" style="background:url('image/homepage/categoires/back banner.jpg');width:100%" >
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

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>


<?php

if(isset($_POST['btnSearch'])){

    $name=$_POST['searchemail'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fitshape";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	//if (!$conn) {
	//	die("Connection failed: " . mysqli_connect_error());
	//}else{
    //    
    //}


    $sql ="SELECT * FROM users WHERE email like '$name'";
   
    $result = mysqli_query($con,$sql);
    
    $rowcount=mysqli_num_rows($result);

    if ($rowcount > 0) {

        for($i=1;$i<=$rowcount;$i++)
        {
            $row=mysqli_fetch_row($result);
            ?>
                <div class="col-md-4" style="padding-top:30px;padding-bottom:0.5px;padding-left:30px;padding-right:30px;">

                <form method="get" action="ex1.php"?ID=<?=$row[0]?>">
                    <table id="table1">
                
                    <tr style="background-color:white">
                      <tr style="text-align:center;"><td><a href="Untitled-2.php?id=<?php echo $row[0];?>"><img src="<?php echo $row[3]; ?>"style='height:200px;width:200;margin-bottom:20px;border-radius:20px;background-color:white;'></a></td>
                      
                    </tr>
                      <tr><td><b><p class="text-center;" style="text-size:8px;text-align:center;"><?=$row[2];?></p></b></td></tr>
                      <tr style="margin-top:50px;">
                       <td style="margin-top:50px;"><p style="margin-left:30px;font-style:normal;margin-top:30px;margin-bottom:5px;font-family:Poppins;font-size:x-small"><?=$row[8];?></p>
                       <h6 style="margin-left:30px;font-style:normal;margin-bottom:30px;font-size:x-small"><?="Rs. " .$row[5].".00" ;?></h6></td>
                           
                       </tr>
                    </tr>
                    
                     </table>
                
                    </form>
                   
                  </div>
               
    <?php
}
}
else {
  echo "<div class='errormsg'>
  There is no animal matching your search....
  </div>";

}
}
 ?>
   
                </div>
                </div>
            </div>
            </div>
          </div>
      </div>



      <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
         nav.style.background = "#00b4d8";
         nav.style.boxShadow = "0px 2px 2px #00b4d8";
         nav.style.height="80px";
         nav.style.paddingTop="15px";
         nav.style.opacity=".7";
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>

<br>

<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                    <b><p style="padding-right:10px;margin-left:120px;">Services</p></b>
                        <ul>
                            <li style="color:#264653;margin-left:120px;"><a href="#"><h6>Web design</h6></a></li>
                            <li style="color:#264653;margin-left:120px;" ><a href="#"><h6>Development</h6></a></li>
                            <li style="color:#264653;margin-left:120px;"><a href="#"><h6>Hosting</h6></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <b><p style="color:#264653;margin-left:200px;">About</p></b>
                        <ul>
                            <li style="color:#264653;margin-left:200px;"><a href="#"><h6>Company</h6></a></li>
                            <li style="color:#264653;margin-left:200px;"><a href="#"><h6>Team</h6></a></li>
                            <li style="color:#264653;margin-left:200px;"><a href="#"><h6>Careers</h6></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                       <b><p style="color:#264653;margin-left:250px;">Contact Us</p></b>
                        <br>
                        <p><i><h6><img src="image/homepage/icon/contact.png" alt="House" style="width:5%;padding-right:10px;margin-left:250px;">petzWorld@gmail.com</i></h6></p>
                        <p><i><h6><img src="image/homepage/icon/email.png" alt="House" style="width:5%; padding-right:10px;margin-left:250px;">+94789542475</i></h6></p>

                    </div>
                    <div class="social" style="text-align:center;padding-right:10px;margin-left:45%;">
                       <a href="#"><i class="icon ion-social-instagram " style="color:#264653; border:20px;padding-right:10px" ></i></a>
                       <a href="#"><i class="icon ion-social-snapchat"style="color:#264653; border:20px;padding-right:10px" ></i></a>
                       <a href="#"><i class="icon ion-social-twitter"style="color:#264653; border:20px;padding-right:10px" ></i></a>
                       <a href="#"><i class="icon ion-social-facebook"style="color:#264653; border:20px;padding-right:10px" ></i></a>
                    
                </div>
                <p style="color:#264653;text-align:center;font-size:xx-small;margin-top:10px;margin-bottom:-20px;margin-left:45%;">PetzWorld © 2021</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</div>


  </body>
</html>

 