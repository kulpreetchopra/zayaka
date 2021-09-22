<?php include("session.php");?>
<?php include"header.php";?>
<?php include"sidebar.php";?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-user-edit"></i>&nbsp;<a href="viewsocial_link.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Add Social Links</li>
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
                <h3 class="card-title">Insert Table</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<form action="social_linkreg.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Whatsapp Icon</label>
                    <input type="text" class="form-control" name="wicon" placeholder="Enter Whatsaap Icon">
                  </div>
                  <div class="form-group">
                    <label>Whatsapp Link</label>
                    <input type="text" class="form-control" name="whatsaap" placeholder="Enter Whatsaap Link">
                  </div>
                  <div class="form-group">
                    <label>Linkedin Icon</label>
                    <input type="text" class="form-control" name="licon" placeholder="Enter Linkedin Icon">
                  </div>
                  <div class="form-group">
                    <label>Linkedin Link</label>
                    <input type="text" class="form-control" name="linkedin" placeholder="Enter Linkedin Link">
                  </div>
                  <div class="form-group">
                    <label>Facebook Icon</label>
                    <input type="text" class="form-control" name="ficon" placeholder="Enter Facebook Icon">
                  </div>
                  <div class="form-group">
                    <label>Facebook Link</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Enter Facebook Link">
                  </div>
                  <div class="form-group">
                    <label>Twitter Icon</label>
                    <input type="text" class="form-control" name="ticon" placeholder=" Enter Twitter Icon">
                  </div>
                  <div class="form-group">
                    <label>Twitter Link</label>
                    <input type="text" class="form-control" name="twitter" placeholder=" Enter Twitter Link">
                  </div>
                  <div class="form-group">
                    <label>Instagram Icon</label>
                    <input type="text" class="form-control" name="iicon" placeholder="Enter Instagram Icon">
                  </div>
                 <div class="form-group">
                    <label>Instagram Link</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Enter Instagram Link">
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-block">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->
<?php include"footer.php";?>