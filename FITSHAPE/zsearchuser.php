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

<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dog View All</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css"> 
    
</head>

<body>



<?php $search = $_POST['search'];?>

 
   <div style="text-align:center;margin:30px;color:silver;">
     <h3>This page content is based on: <?php echo $search;?></h3>
   </div>
      
   <div class="container-fluid" style="background:url('image/homepage/categoires/back banner.jpg');width:100%" >
      <div class="col-md-12" style="width:100%" id="tableFixHead">
        <div class="row" style="margin-left:6%;margin-right:10%;padding:0;">
          <div class="col-md-12">
            <div class="col=md-12">
                <div class="row">

              <?php




        $sql = "SELECT * FROM user WHERE username LIKE '%$search%'";
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);

        if ($count > 0) {

            while ($row  = mysqli_fetch_assoc($res)) {

                $email = $row['email'];
                $password = $row['password'];

                ?>
                   <div class="col-md-4" style="padding-top:30px;padding-bottom:0.5px;padding-left:30px;padding-right:30px;">
  
                   <form method="get" action="ex1.php"?username?=<?=$row['username']?>">
                   <table id="table1">
                    <tr style="background-color:white">
                        <tr><td><b>
                            <p name="email" class="text-center;" style="text-size:8px;text-align:center;"><?php echo $email;?></p></b></td></tr>
                        </b></td></tr> 

                        <tr><td><b>
                            <p name="password" class="text-center;" style="text-size:8px;text-align:center;"><?php echo $password;?></p></b></td></tr>
                        </b></td></tr> 

                        </tr>
                    
                     </table>
                
                    </form>
                   
                  </div>
                <?php

            }
        }else {
            echo "<div class='errormsg'>
            There is no user matching your search....
            </div>";
        }

            ?>
                </div>
                </div>
            </div>
            </div>
          </div>
      </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</div>




  </body>
</html>