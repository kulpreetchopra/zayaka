<?php
error_reporting(0);
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
            <h1 class="m-0 text-dark"><i class="fas fa-eye"></i>&nbsp;<a href="addsubfooter.php"><i class="fas fa-user-edit"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Sub Footer</li>
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
                      <th>Bar:</th>
                      <th>Social_Title:</th>
                      <th>Contact_Title:</th>
                      <th>Contact_No:</th>
                      <th>Opening_Hrs:</th>
                      <th>Action:</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <tr>
                      <?php

       include ('dbcon.php');

       $q = "select * from sub_footer order by id desc";
       $query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {
  ?>

        <tr>
        <td><?php echo $result['id']?></td>
        <td><?php echo $result['bar']?></td>
        <td><?php echo $result['social_title']?></td>
        <td><?php echo $result['social_title']?></td>

        <td><?php echo $result['contact_no']?></td>
        <td><?php echo $result['opening_hr']?>
        <td class="text-center">
        <a href="editsubfooter.php?id=<?php echo $result['id']?>"><i class="fas fa-edit"></i>&nbsp;</a>
        <a href="deletsubfooter.php?id=<?php echo $result['id']?>">&nbsp;<i class="fas fa-trash"></i></a>
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