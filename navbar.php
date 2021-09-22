<!-- navbar1 end -->
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid ">
          <div class="navbar-collapse">
            <ul class="navbar-nav ml-auto" style="text-align:center;">
              <li class="nav-item  dropdown" style="float: left">
                <a href="#" id="dropdown-a" data-toggle="dropdown" style="text-decoration:none;text-transform: uppercase;"><i class="fas fa-user"style="color:<?php echo $theme['color']?>; font-size: 20px;"></i>
                  <?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>
                  <span style="color:black"><?php echo $name;?></span>
                  <i style="color:<?php echo $theme['color']?>!important;" class="fas fa-caret-down"></i>
              <div class="dropdown-menu"  aria-labelledby="dropdown-a">
                <a class="dropdown-item" style="margin-top: -25px" href="user/index.php?username=<?php echo $name?>"><i class="nav-icon fas fa-tachometer-alt"></i> Login</a>
                <a class="dropdown-item" href="user/logout.php"><i class="nav-icon fas fa-th"></i> Logout</a>
              </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- navbar1 end -->
<!-- Start navbar -->
<?php
include ('dbcon.php');

 $q = "select * from navbar order by id desc"; 
 $query = mysqli_query($con, $q);
 $disp = mysqli_fetch_assoc($query);
     
?>
  <header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php?username=<?php echo $name?>">
          <img src="<?php  echo 'admin/'. $disp['image']?>" width="150px" height="75px" alt="Image♡" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-rs-food">
          <ul class="navbar-nav ml-auto">
            <?php
       include ('dbcon.php');
       $q = "select * from navbar order by id asc"; 
       $query = mysqli_query($con, $q);
       while ($result = mysqli_fetch_array($query)) {
                 
     ?>
            <li class="nav-item <?php echo $result['active']?>"><a class="nav-link" href="<?php echo $result['link']?>?username=<?php echo $name?>"><i class="<?php echo $result['icon']?>"></i> <?php echo $result['name']?></a></li>
             <?php
           }
           ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"><i class="fas fa-hamburger"></i> Pages</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="reservation.php?username=<?php echo $name?>"><i class="fas fa-concierge-bell"></i> Reserve Now</a>
                <a class="dropdown-item" href="ordernow.php?username=<?php echo $name?>"><i class="fas fa-utensils"></i> Order Now</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"><i class="fas fa-user-friends"></i> User</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="registration.php?username=<?php echo $name?>"><i class="fas fa-user-edit"></i> Register Now</a>
                <a class="dropdown-item"  href="user/dashboard.php?username=<?php echo $name?>"><i class="fas fa-user-cog"></i> User Profile</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End navbar -->
