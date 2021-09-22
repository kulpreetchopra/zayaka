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
            <h1 class="m-0 text-dark"><i class="fas fa-eye"></i>&nbsp;<a href="addreviews.php"><i class="fas fa-user-edit"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Reviews</li>
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
                      <th>Username:</th>
                      <th>Ratings:</th>
                      <th>Action:</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <tr>
                      <?php

       include ('dbcon.php');

       $q = "select * from ratings order by id desc";
       $query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {
  ?>

        <tr>
        <td><?php echo $result['id']?></td>
        <td><?php echo $result['username']?></td>
        <td class="text-center"><?php
         echo $result['rate']?>
           <?php
          if($result['rate']==5) {
            echo"&#128525;";
          }
          if($result['rate']==4) {
            echo"&#129321;";
          }
          if($result['rate']==3) {
            echo"&#128522;";
          }
          if($result['rate']==2) {
            echo"&#128528;";
          }
          if($result['rate']==1) {
            echo"&#129314;";
          }
          ?>
         </td>
        <td class="text-center">
        <a href="deletreviews.php?id=<?php echo $result['id']?>">&nbsp;<i class="fas fa-trash"></i></a>
        </td>
      </tr>

      <?php
         }
        ?>
        <?php

       include ('dbcon.php');

       $q1 = "select sum(rate)/count(rate) from ratings;";
       $query1 = mysqli_query($con, $q1);
       $result1 = mysqli_fetch_array($query1);
       $average = array_sum($result1) / count($result1);
       ?>
        <tr>Average Ratings <?php
        echo $average;  
        if($average>=0 && $average<=1.5){
          echo"&#129314;";
        }
        if($average>=1.6 && $average<=2.5){
          echo"&#128528;";
        }
        if($average>=2.6 && $average<=3.5){
          echo"&#128522;";
        }
        if($average>=3.6 && $average<=4.5){
          echo"&#129321;";
        }
        if($average>=4.6 && $average<=5){
           echo"&#128525;";
        }
        ?> out of 5&#128525;</tr>
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