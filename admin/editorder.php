<?php
error_reporting(0);
?>
<?php include("session.php");?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From order_details where id=$id";
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
    $onumber= $_POST['onumber'];
    $oname= $_POST['oname'];
    $oqty= $_POST['oqty'];
    $oprice =$_POST['oprice'];

   $q ="UPDATE order_details SET name='$name',email='$email',mobile='$mobile',address='$address',onumber='$onumber',oname='$oname',oqty='$oqty',oprice='$oprice' WHERE id=$id";

   $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
  $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
    if($fire) header("Location:order_details.php");
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
              <li class="breadcrumb-item active">Edit Order</li>
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
                    <label>Item Number</label>
                    <input type="text" class="form-control" name="onumber" value="<?php echo $user['onumber'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Item Name</label>
                    <input type="text" class="form-control" name="oname" value="<?php echo $user['oname'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Quantity</label>
                    <br>
          <select name="oqty" value="<?php echo $user['oqty'];?>" class="form-control">
      <option value="-1">Select</option>
      <option value="01" <?php
        if($user['oqty']=='01')
        {echo "selected";}
      ?>>01</option>
      <option value="02" <?php
        if($user['oqty']=='02')
        {echo "selected";}
      ?>>02</option>
      <option value="03" <?php
        if($user['oqty']=='03')
        {echo "selected";}
      ?>>03</option>
      <option value="04" <?php
        if($user['oqty']=='04')
        {echo "selected";}
      ?>>04</option>
      <option value="05" <?php
        if($user['oqty']=='05')
        {echo "selected";}
      ?>>05</option>
      </select>
                  </div>
                  <div class="form-group">
                    <label>Order Price</label>
                    <input type="text" class="form-control" name="oprice" value="<?php echo $user['oprice'] ?>">
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