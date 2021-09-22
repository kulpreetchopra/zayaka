<?php
error_reporting(0);
?>
<?php include("session.php");?>
<aside class="main-sidebar elevation-4" style="background-color:<?php echo $theme['color']?>!important;">
  <br>
  <?php

       include ('dbcon.php');
       $user=$_SESSION['username'];
       $q = "SELECT * FROM `user` WHERE  `username`='$user'";
       $query = mysqli_query($con, $q);
       $result = mysqli_fetch_array($query);
    //    echo $result['image'];
       
  ?>
    <!-- Brand Logo -->
    <center>
      <a href="index.php" class="d-block"><h5 style="color: white;"><i class="fas fa-user">&nbsp;</i><?php echo$result['username']?>&nbsp;<i class="fas fa-heart" style="color:white;"></i></h5></a>
      <p style="border-bottom-style: ridge;
    border-bottom-color: white;"></p>
      <div style="color: white;">
      <p><i class="fas fa-utensils"></i> <?php echo$result['interest']?></p>
      <p><i class="fas fa-phone-alt"></i> <?php echo$result['mobile']?></p>
      <p><?php echo$result['email']?></p>
      </div>
    </center>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2 os-viewport-native-scrollbars-invisible" style="padding: 0px 8px; height: 100%; width: 100%;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active"style="background-color: black!important">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"style="background-color: white">
                <a href="" data-target="#profile" data-toggle="tab" class="nav-link ">
                  <i class="fas fa-eye"></i>
                  <p>View Profile</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: white">
                <a href="" data-target="#edit" data-toggle="tab" class="nav-link ">
                  <i class="fas fa-user-edit"></i>
                  <p>Edit Profile</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link active"style="background-color: black!important">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User Cart
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"style="background-color: white">
                <a href="" data-target="#order" data-toggle="tab" class="nav-link ">
                  <i class="fas fa-shopping-cart"></i>
                  <p>Order Details</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: white">
                <a href="" data-target="#reservation" data-toggle="tab" class="nav-link">
                <i class="fas fa-shopping-cart"></i>
                <p>Reservation Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"style="color: white"></i>
              <p style="color: white">
                Logout
                <span class="right badge badge-success">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>