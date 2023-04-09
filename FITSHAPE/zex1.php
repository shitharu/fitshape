<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitshape";

$con = mysqli_connect($servername, $username, $password, $dbname);
    
?>

<html>
  <head>
    <title>View One User All</title>
    <link rel="icon" href="image/homepage/icon/logo.png">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<style>

#table1 {   
   border-collapse: separate;
   border-spacing: 0 15px;
   box-shadow: 8px ;
   transition: 0.3s;
   width:100%;
   border-radius:20px;
   background-color:#ccd5ae;
   font-family:Poppins;
}
 
.td 
{

    text-align: center;
    border: 1px;
    padding: 5px;
    margin: 10px;
}

.tableFixHead {
		overflow-y: auto;
		height:150%;
		width:98%;
    margin-left:30px;
	  }
.tableFixHead thead th {
		position: sticky;
		top: 0;
	  }

    *{
 padding: 0px;
 margin:0px;
box-sizing: border-box;
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
    width: 100%;
	padding:10px;
	position: fixed;
	top: 0px;
	text-align: center;
	transition: .5s;
}

.navbar ul li{
	
	display:inline-block;
	padding: 10px 30px;
	color: white;
	font-size: 24px;
    text-decoration: none;
	font-family: sans-serif;
	cursor: pointer;
	border-radius:10px;
	transition: .5s;
	}


.navbar ul li:hover{
	background:#ff69b4;
    
	}
      
.nav-area {
	float: right;
	list-style: none;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: #fff;
	text-decoration: none;
	padding: 5px 5px;
	font-family: poppins;
	font-size: 16px;
	text-transform: uppercase;
}
.nav-area li a:hover {

	color: #333;
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
  margin-left: 20px;
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

  .form{
    margin-left:350px;
    margin-right:350px;
    border-radius:10px;
    border-style: groove;
    padding:50px;
    border-color:#ffe4e1;
  
}


</style>
  </head>

<body>

<div>
<header>
<div class="navbar" id='nav'>
    <div class="logo">
        <img src="image/homepage/categoires/logoword titlebar.png" alt="">
    </div>
<ul class="nav-area">
<li><a  class="active" href="HomeHome.php">Home</a></li>
<li><a href="About Us.php">About</a></li>
<li><a href="LoginPage.php">Login</a></li>
<li><a href="DonatePage.php">Donate</a></li>
<li><a href="#">Search</a></li>
</ul>
   </div>
</div>

<script type="text/javascript">
     
     var  nav = document.getElementById('nav');
     
     window.onscroll = function(){

       if (window.pageYOffset >100) {

         nav.style.background = "#ffbcd9";
         nav.style.boxShadow = "0px 2px 2px #ffbcd9";
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

<div class="container-fluid" >
        <div class="col-md-12" style="margin-left:1%;">
            <div class="row" style="margin-left:15%;margin-right:15%;">
            <div class="col-md-12">
             
                <div class="col=md-12">
                <div class="row">
  
                <?php
                  $email = $_SESSION['email'];
                 
                  $query = "SELECT * FROM user_details WHERE email = '$email'";
 
                  $result=mysqli_query($con,$query);

                 {?>
                  <div class="col-md-4" style="background-color:#e9edc9;padding-top:30px;padding-bottom:0.5px;padding-left:30px;padding-right:30px;">
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
               
                <?php }       
                ?>

                </div>
                </div>
            </div>
            </div>
        </div></div>

<br><br>

  </body>
</html>

