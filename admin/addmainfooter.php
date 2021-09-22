<?php include("session.php");?>
<?php include"header.php";?>
<?php include"sidebar.php";?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-user-edit"></i>&nbsp;<a href="viewmainfooter.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Add Main Footer</li>
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
              <form action="mainfooterreg.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label>Icon Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Icon Image">
                  </div>
                  <div class="form-group">
                    <label>About</label>
                    <textarea type="text" class="form-control" name="about" placeholder="Enter About"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Button Name</label>
                    <input type="text" class="form-control" name="button_name" placeholder="Enter Button Name">
                  </div>
                  <div class="form-group">
                    <label>Button Link</label>
                    <input type="text" class="form-control" name="button_link" placeholder="Enter Button Link">
                  </div>
                  <div class="form-group">
                    <label>Copyright</label>
                    <textarea type="text" class="form-control" name="copyright" placeholder="Enter Copyright"></textarea>
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