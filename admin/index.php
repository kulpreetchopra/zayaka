<?php
error_reporting(0);
?>
<?php
session_start();
?>
<?php include"../theme.php";?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zayaka Restaurent | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Site Icons -->
  <link rel="shortcut icon" href="adminimage/logo.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="adminimage/logo.png">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
  </style>
  <style type="text/css">
    .bg{
    background-color:<?php echo $theme['color']?>!important;
    }
    .zayaka{
      font-family:<?php echo $theme['font'];?>;
    }
  </style>
</head>
<body class="hold-transition login-page bg zayaka">
<div class="login-box">
  <div class="login-logo">
    <h1 class="blog-name pt-lg-4 mb-0" style="color: white">Admin Profile</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body"style="background-image: url(../images/about-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="login.php" onsubmit="return adminlogin()" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="user" name="username" placeholder="Enter Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span id="suser" class="text-danger font-weight-bold"> </span>
        <div class="input-group mb-3">
          <input type="password" id="pass" name="password" class="form-control" placeholder="Enter Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span id="spass" class="text-danger font-weight-bold"> </span>
        <div class="row">
            <div class="col-8">
            <button type="submit" name="login" class="btn btn-success btn-block">Sign In</button>
            </div>
          <!-- /.col -->
          <div class="col-4">
            <a href="../index.php" class="btn btn-block btn-primary">Cancel
        </a>
          
          <!-- /.col -->
        </div>
      </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p align="center">--OR--</p>
        <a href="" data-toggle="modal"data-target="#ag" class="btn btn-block btn-danger">
          <i class="fas fa-key"></i></i> Forgotten Password
        </a>
      </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!--login start-->
    <div class="modal fade" id="ag">
      <div class="modal-dialog" >
        <div class="modal-content">
          <div class="modal-header" style="background-color:<?php echo $theme['color']?>!important">
            <h5 class="modal-title" style="color:white;font-weight:bold" id="exampleModalLabel"><i class="far fa-question-circle"></i>Forgott Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span >&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="forgott_pass.php" method="post" enctype="multipart/form-data" onsubmit="return forgott_pass()">
              <div class="input-group mb-3">
                <input type="text" name="user" class="form-control" placeholder="Enter Registered Username" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <p align="center">--OR--</p>
              <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Enter Registered Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <input class="btn btn-block" style="background:<?php echo $theme['color']?>!important;color:white" type="submit" name="update" value="SUBMIT">
        </form>
        </div>
            <center>
              <h3 style="background-color:<?php echo $theme['shade']?>!important;">
                <?php

       include ('dbcon.php');
       $q1 = "select * from social_links order by id desc"; 
       $query1 = mysqli_query($con, $q1);
       $result1 = mysqli_fetch_array($query1);
       ?>
              <a href="tel:<?php echo $result1['whatsaap']?>"><i class="<?php echo $result1['wicon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['linkedin']?>"><i class="<?php echo $result1['licon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['facebook']?>"><i class="<?php echo $result1['ficon']?>" style="color:white;font-size: 30px;"></i></a>
                <a href="<?php echo $result1['twitter']?>"><i class="<?php echo $result1['ticon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['instagram']?>"><i class="<?php echo $result1['iicon']?>" style="color:white; font-size: 30px;"></i></a>
              </h3>
            </center>
          </div>
        </div>
      </div>
    </div>
    <!-- end login -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/adminlogin.js"></script>
<script type="text/javascript">
  function forgott_pass(){
    alert("Forgotten Password Request Successfully Submitted!!");
  }
</script>
</body>
</html>
