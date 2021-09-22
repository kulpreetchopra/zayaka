<?php
error_reporting(0);
?>
<?php

       include ('dbcon.php');

       $pass=$_SESSION['password'];
       $q = "SELECT * FROM `admin` WHERE  `password`='$pass'";
       $query = mysqli_query($con, $q);
       

       $result = mysqli_fetch_array($query)
  ?>
<?php include("session.php");?>
<?php include"header.php";?>
<?php include"sidebar.php";?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-user-edit"></i>&nbsp;<a href="viewprofile.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Add Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Insert Table</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="adminreg.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
          <label>Email Address: </label>
          <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address"><br>
        <div class="form-group">
          <label>Mobile Number: </label>
          <input type="mobile" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" ><br>
        <div class="form-group">
          <label>Address: </label>
          <textarea type="text" name="address" class="form-control" placeholder="Enter Your Address" ></textarea>
        </div>
        <div class="form-group">
          <label > Gender: </label><br>
      <input type="radio" value="male" name="gender">Male
      <br>
      <input type="radio" value="female" name="gender">Female
      </div>
      <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password"  placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" placeholder="image">
                  </div>
                 <div class="form-group">
                    <label>About</label>
                    <textarea type="text" class="form-control" name="about" placeholder="About"></textarea>
                  </div>
                  <input style="display:none;" type="text" name="admin" value="<?php echo $result['name'] ?>">
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-block">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->
<?php include"footer.php";?>