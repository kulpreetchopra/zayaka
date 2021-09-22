<?php include"theme.php";?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Zayka Restaurent | Online Quiz</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="admin/adminimage/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="admin/adminimage/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>   
  <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- index CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- userlogin -->
    <link rel="stylesheet" href="css/userlogin.css">

    <!-- font links -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- goldman  -->
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <!-- pacifico -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Goldman&family=Modak&family=Pacifico&display=swap" rel="stylesheet">
    <!-- rubik -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <!-- eater -->
    <link href="https://fonts.googleapis.com/css2?family=Eater&display=swap" rel="stylesheet">
    <!-- cinzel Decorative -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <!-- Patrik Hand Sc -->
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">
    <!-- font end -->
    <style type="text/css">
    .bg{
    background-color:<?php echo $theme['color']?>!important;;
    }
    .zayaka{
      font-family:<?php echo $theme['font'];?>;
    }
  </style>
</head>
<body class="hold-transition login-page bg zayaka">
<div class="login-box">
  <div class="login-logo">
    <h1 class="blog-name pt-lg-4 mb-0" style="color: white"><i class="fas fa-user-edit"></i> Zayaka Quiz</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body"style="background-image: url(images/about-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
      <p class="login-box-msg">Read Instruction Before start Quiz</p>
      <div class="social-auth-links text-center mb-3">
        <p>- Instructions -<br>Attempt All Questions.<br>
        Total Questions:10</p>
        <div class="row">
            <div class="col-7">
              <a href="#" onclick="openNav()" class="btn btn-block btn-success">
              <i class="far fa-smile-beam"></i></i> Start Quiz
              </a>
            </div>
          <!-- /.col -->
          <?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>
          <div class="col-5">
            <a href="index.php?username=<?php echo $name?>" class="btn btn-block btn-primary">Home
        </a>
          
          <!-- /.col -->
        </div>
      </div>
      <?php

       include ('dbcon.php');
       $q1 = "select * from social_links order by id desc"; 
       $query1 = mysqli_query($con, $q1);
       $result1 = mysqli_fetch_array($query1);
       ?>
      <div class="social-auth-links text-center mb-3">
        <p class="btn btn-block btn-danger">Help Line/Support <br>
          <a href="tel:<?php echo $result1['whatsaap']?>"><i class="<?php echo $result1['wicon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['linkedin']?>"><i class="<?php echo $result1['licon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['facebook']?>"><i class="<?php echo $result1['ficon']?>" style="color:white;font-size: 30px;"></i></a>
                <a href="<?php echo $result1['twitter']?>"><i class="<?php echo $result1['ticon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['instagram']?>"><i class="<?php echo $result1['iicon']?>" style="color:white; font-size: 30px;"></i></a>
        </p>
      </div>
      </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/order.js"></script>
    <script src="js/reservation.js"></script>
    <script src="js/registration.js"></script>
    <script src="js/userlogin.js"></script>
</body>
</html>