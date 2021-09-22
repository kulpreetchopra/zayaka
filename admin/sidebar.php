<?php
error_reporting(0);
?>
<aside class="main-sidebar elevation-4" style="background-color:<?php echo $theme['color']?>!important;">
  <br>
  <?php

       include ('dbcon.php');

       $pass=$_SESSION['password'];
       $q = "SELECT * FROM `admin` WHERE  `password`='$pass'";
       $query = mysqli_query($con, $q);
       

       $result = mysqli_fetch_array($query)
  ?>
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      &nbsp;&nbsp;&nbsp;&nbsp;
      <img src="<?php echo $result['image']?>" style="height: 160px;width: 150px;" alt="AdminLTE Logo" class="z-image img-circle elevation-3">
         </a>
      <!-- <span class="brand-text font-weight-light"> Admin Login</span> -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="info" style="color: white">
          <center>
          <h5><i class="fas fa-user"></i> <?php echo$result['name']?> <i class="fas fa-heart" style="color:white;"></i></h5>
          <p><i class="fas fa-paint-roller"></i> <?php echo$result['about']?></p>
          <p style="border-bottom-style: ridge;border-bottom-color: white;"></p>
          </center>
        </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 os-viewport-native-scrollbars-invisible" style="padding: 0px 8px; height: 100%; width: 100%;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active"style="background-color: black!important">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"style="background-color: white">
                <a href="adminprofile.php" class="nav-link ">
                  <i class="fas fa-user-edit"></i>
                  <p>Add Profile</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: white">
                <a href="viewprofile.php" class="nav-link ">
                  <i class="fas fa-eye"></i>
                  <p>View Profile</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active"style="background-color: black!important">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Customer Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"style="background-color: white">
                <a href="customer_details.php" class="nav-link ">
                  <i class="fas fa-eye"></i>
                  <p>Customer Details</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: white">
                <a href="contactus_details.php" class="nav-link ">
                  <i class="fas fa-eye"></i>
                  <p>ContactUs Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active"style="background-color: black!important">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Customer Orders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"style="background-color: white">
                <a href="order_details.php" class="nav-link ">
                  <i class="fas fa-eye"></i>
                  <p>Order Details</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: white">
                <a href="reservation_details.php" class="nav-link ">
                  <i class="fas fa-eye"></i>
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