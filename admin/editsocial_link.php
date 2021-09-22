<?php
error_reporting(0);
?>
<?php include("session.php");?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From social_links where id=$id";
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

   echo$wicon= $_POST['wicon'];
    echo$whatsaap= $_POST['whatsaap'];
    echo$licon= $_POST['licon'];
    echo$linkedin= $_POST['linkedin'];
    echo$ficon= $_POST['ficon'];
    echo$facebook= $_POST['facebook'];
    echo$ticon= $_POST['ticon'];
    echo$twitter=$_POST['twitter'];
    echo$iicon= $_POST['iicon'];
    echo$instagram =$_POST['instagram'];
   
   $q ="UPDATE social_links SET wicon='$wicon',whatsaap='$whatsaap',licon='$licon',linkedin='$linkedin',ficon='$ficon',facebook='$facebook',ticon='$ticon',twitter='$twitter',iicon='$iicon',instagram='$instagram'WHERE id=$id";

   $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
    if($fire) header("Location:viewsocial_link.php");



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
            <h1 class="m-0 text-dark"><i class="fas fa-edit"></i>&nbsp;<a href="viewsocial_link.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Social links</li>
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
                    <label >Whatsaap Icon</label>
                    <input type="text" class="form-control" name="wicon" value="<?php echo $user['wicon'] ?>">
                  </div>
                  <div class="form-group">
                    <label >Whatsaap Link</label>
                    <input type="text" class="form-control" name="whatsaap" value="<?php echo $user['whatsaap'] ?>">
                  </div>
                  <div class="form-group">
                    <label >Linkedin Icon</label>
                    <input type="text" class="form-control" name="licon" value="<?php echo $user['licon'] ?>">
                  </div>
                  <div class="form-group">
                    <label >Linkedin Link</label>
                    <input type="text" class="form-control" name="linkedin" value="<?php echo $user['linkedin'] ?>">
                  </div>
                  <div class="form-group">
                    <label >Facebook Icon</label>
                    <input type="text" class="form-control" name="ficon" value="<?php echo $user['ficon'] ?>">
                  </div>
                  <div class="form-group">
                    <label >Facebook Link</label>
                    <input type="text" class="form-control" name="facebook" value="<?php echo $user['facebook'] ?>">
                  </div>
                  <div class="form-group">
                    <label >Twitter Icon</label>
                    <input type="text" class="form-control" name="ticon" value="<?php echo $user['ticon'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Twitter Link</label>
                    <input type="text" class="form-control" name="twitter" value="<?php echo $user['twitter'] ?>">
                  </div>
                  <div class="form-group">
                    <label >Instagram Icon</label>
                    <input type="text" class="form-control" name="iicon" value="<?php echo $user['iicon'] ?>">
                  </div>
                 <div class="form-group">
                    <label>Instagram Link</label>
                    <input type="text" class="form-control" name="instagram" value="<?php echo $user['instagram'] ?>">
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