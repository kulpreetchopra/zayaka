<?php
error_reporting(0);
?>
<?php
 include ('dbcon.php');
 if(isset($_REQUEST['update']))
 {
  $file=$_FILES["image"]["name"];
    // echo $file;
    $tmp_name =$_FILES["image"]["tmp_name"];
    $path ="adminimage/".$file;
    //only jpg,png,upload
$file1 =explode(".", $file); //image.jpg Arrays
    $file1[1];   //jpg
    $ext =$file1[1];
    $allowed=array("jpg","png","gif");
    $id=$_REQUEST['id'];
    if(in_array($ext, $allowed))
    { 
 move_uploaded_file($tmp_name,$path);
    $query ="UPDATE homespecial SET image = '$path'where id='$id' ";
    $fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));
}
} 
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
            <h1 class="m-0 text-dark"><i class="fas fa-eye"></i>&nbsp;<a href="addhspecial.php"><i class="fas fa-user-edit"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Special</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>#</th>
                      <th>Title:</th>
                      <th>Number:</th>
                      <th>Name:</th>
                      <th>Image:</th>
                      <th>Link:</th>
                      <th>Price:</th>
                      <th>About:</th>
                      <th>Action:</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <tr>
                      <?php

       include ('dbcon.php');

       $q = "select * from homespecial order by id desc";
       $query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {
  ?>

        <tr>
        <td><?php echo $result['id']?></td>
        <td><?php echo $result['tittle']?></td>
        <td><?php echo $result['item_no']?></td>
        <td><?php echo $result['name']?></td>
        <td class="text-center"><img src="<?php echo $result['image']?>" width="80" height="80">
        <br>
        <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $result['id']?>">  
        <input type="file" name="image">
        <br><input type="submit" name="update" value="update">
        </form>
        </td>
        <td><?php echo $result['link']?></td>
        <td><?php echo $result['price']?></td>
        <td><?php echo $result['about']?></td>
        <td class="text-center">
        <a href="hspecialedit.php?id=<?php echo $result['id']?>"><i class="fas fa-edit"></i>&nbsp;</a>
        <a href="hspecialdelet.php?id=<?php echo $result['id']?>">&nbsp;<i class="fas fa-trash"></i></a>
        </td>
      </tr>

      <?php
         }
        ?>

                     
                  </tbody>
                   
                </table>
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
</section>
</div><!--end-->

<?php include"footer.php";?>