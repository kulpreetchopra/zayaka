<?php
error_reporting(0);
?>
<?php include("session.php");?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From admin where id=$id";
$fire =mysqli_query($con,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
$user['name'];

}
?>
<!-- update -->
<?php   
include('dbcon.php');


  if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $address= $_POST['address'];
    $gender= $_POST['gender'];
    $username =$_POST['username'];
    $password =$_POST['password'];
    $forgott_pass =$_POST['forgott_pass'];
    $about =$_POST['about'];
    $admin =$_POST['admin'];

   $q ="UPDATE admin SET name='$name',email='$email',mobile='$mobile',address='$address',gender='$gender',username='$username',password ='$password',forgott_pass='$forgott_pass',about='$about',admin='$admin' WHERE id=$id";

   $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
    if($fire){
    $_SESSION['succes']="Profile Updatted Successfully!!";
    header("location:viewprofile.php");
  }else{
    $_SESSION['error']="Profile Updatted Unsuccessfully!!";
    header("location:viewprofile.php");
    // echo "<div class='alert alert-danger'>Query Failed.</div>";
  }
}
?>

<?php include"header.php";?>
<?php include"sidebar.php";?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-edit"></i>&nbsp;<a href="viewprofile.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
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
                <h3 class="card-title">Edit Table</h3>
              </div>
              <!-- /.card-header -->
              <?php

       include ('dbcon.php');

       $pass=$_SESSION['password'];
       $q = "SELECT * FROM `admin` WHERE  `password`='$pass'";
       $query = mysqli_query($con, $q);
       

       $result = mysqli_fetch_array($query)
  ?>
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $user['name'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $user['email'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Mobile</label>
                    <input type="mobile" class="form-control" name="mobile" value="<?php echo $user['mobile'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea type="text" class="form-control" name="address"><?php echo $user['address'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Gender</label>
                    <br>
                    <input type="radio" value="male"<?php echo ($user["gender"]=='male')?'checked':'' ?> name="gender">Male
             <?php
           if($user["gender"]=='male')
           {
            echo "♡";
             }
          ?><br>
            <input type="radio" value="female"<?php echo ($user["gender"]=='female')?'checked':'' ?> name="gender">Female
             <?php
           if($user["gender"]=='female')
           {
            echo "♡";
             }
          ?>
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $user['username'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" value="<?php echo $user['password'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Forgott Password</label>
                    <br>
                    <input type="radio" value="red"<?php echo ($user["forgott_pass"]=='red')?'checked':'' ?> name="forgott_pass"><i class="fas fa-key" style="color:red"></i>
             <?php
           if($user["forgott_pass"]=='red')
           {
            echo "♡";
             }
          ?><br>
                  <input type="radio" value="green"<?php echo ($user["forgott_pass"]=='green')?'checked':'' ?> name="forgott_pass"><i class="fas fa-key" style="color:green"></i>
             <?php
           if($user["forgott_pass"]=='green')
           {
            echo "♡";
             }
          ?>
                  </div>
                 <div class="form-group">
                    <label>About</label>
                    <textarea type="text" class="form-control" name="about"><?php echo $user['about'] ?></textarea>
                  </div>
                  <input style="display:none;" type="text" name="admin" value="<?php echo $result['name'] ?>">
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->
<?php include"footer.php";?>