<?php
error_reporting(0);
?>
<?php include("session.php");?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From modal where id=$id";
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

    $tittle= $_POST['tittle'];
    $link= $_POST['link'];

   $q ="UPDATE modal SET tittle='$tittle',link='$link' WHERE id=$id";

  $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
    if($fire) header("Location:viewmodal.php");
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
            <h1 class="m-0 text-dark"><i class="fas fa-edit"></i>&nbsp;<a href="viewmodal.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Information</li>
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
                    <label>Title</label>
                    <input type="text" class="form-control" name="tittle" value="<?php echo $user['tittle'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" name="link" value="<?php echo $user['link'] ?>">
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