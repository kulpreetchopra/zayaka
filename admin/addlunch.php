<?php include("session.php");?>
<?php include"header.php";?>
<?php include"sidebar.php";?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-user-edit"></i>&nbsp;<a href="viewlunch.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Add Lunch</li>
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
              <form action="lunchreg.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="tittle" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label>Number</label>
                    <input type="text" class="form-control" name="item_no" placeholder="Enter Number">
                  </div>
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" placeholder="image">
                  </div>
                 <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" name="link" placeholder="Enter Link">
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Enter Price">
                  </div>
                  <div class="form-group">
                    <label>About</label>
                    <textarea type="text" class="form-control" name="about" placeholder="Enter About Dish"></textarea>
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