<?php
error_reporting(0);
?>
<?php include("session.php");?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From adminreply where id=$id";
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
   $reply= $_POST['reply'];
   $admin= $_POST['admin'];

   $q ="UPDATE adminreply SET name='$name',reply='$reply',admin='$admin' WHERE id=$id";

   $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
    // if($fire)echo "data updated successfully.";
    if($fire) header("Location:contactus_details.php");
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
              <li class="breadcrumb-item active">Reply Customer</li>
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
                <h3 class="card-title">Reply Inbox</h3>
              </div>
              <!-- /.card-header -->
              <?php

       include ('dbcon.php');

       $pass=$_SESSION['password'];
       $q2 = "SELECT * FROM `admin` WHERE  `password`='$pass'";
       $query2 = mysqli_query($con, $q2);
       

       $result = mysqli_fetch_array($query2)
  ?>
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label><i class="fas fa-edit"></i> Reply To :<input type="text" name="name" value="<?php echo $user['name'] ?>"></label><label><input style="display:none;" type="text" name="message_id" value="<?php echo $user['message_id'] ?>"></label><label><input style="display:none;" type="text" name="admin" value="<?php echo $result['name'] ?>"></label>
                    <textarea type="text" class="form-control" name="reply"></textarea>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Send Reply</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->
<?php include"footer.php";?>