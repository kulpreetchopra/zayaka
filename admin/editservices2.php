<?php
error_reporting(0);
?>
<?php include("session.php");?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From footer_services2 where id=$id";
$fire =mysqli_query($con,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
$user['title'];

}
?>
<!-- update -->
<?php   
include('dbcon.php');


  if(isset($_POST['submit'])){

   $title =$_POST['title'];
   $services =$_POST['services'];
  
   
   $q ="UPDATE footer_services2 SET title='$title',services='$services' WHERE id=$id";

   $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
    if($fire) header("Location:viewservices2.php");



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
            <h1 class="m-0 text-dark"><i class="fas fa-edit"></i>&nbsp;<a href="viewservices2.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Services</li>
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
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $user['title'] ?>">
                  </div>
                  
                  <div class="form-group">
                    <label>Service</label>
                    <textarea type="text" class="form-control" name="services"><?php echo $user['services'] ?></textarea>
                  </div>
                  
                  
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