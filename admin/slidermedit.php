<?php
error_reporting(0);
?>
<?php include("session.php");?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From menuslider where id=$id";
$fire =mysqli_query($con,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
$user['tittle'];

}
?>
<!-- update -->
<?php   
include('dbcon.php');


  if(isset($_POST['submit'])){

   $tittle= $_POST['tittle'];
   $name =$_POST['name'];
   $filename = $_FILES['image'] ['name'];
   $tempname = $_FILES['image'] ['tmp_name'];
   $folder = "adminimage/" .$filename;

   move_uploaded_file($tempname, $folder);
   echo "<img src='$folder' height='100' width='100' />";
   $q ="UPDATE menuslider SET name='$name',image='$folder',tittle='$tittle' WHERE id=$id";

   $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
  	if($fire) header("Location:viewsliderm.php");



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
            <h1 class="m-0 text-dark"><i class="fas fa-edit"></i>&nbsp;<a href="viewsliderm.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Banner</li>
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
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $user['name'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" value="<?php echo $user['image'] ?>">
                    <img src="<?php echo $user['image']?>" width="100" height="100">
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="tittle" value="<?php echo $user['tittle'] ?>">
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