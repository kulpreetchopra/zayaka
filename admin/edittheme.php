<?php
error_reporting(0);
?>
<?php include("session.php");?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From theme where id=$id";
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

   $color= $_POST['color'];
   $shade =$_POST['shade'];
   $font =$_POST['font'];
   
  $q ="UPDATE theme SET color='$color',shade='$shade',font='$font' WHERE id=$id";

   $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
  	if($fire){
    $_SESSION['succes']="Theme Updatted Successfully!!";
    header("location:viewtheme.php");
  }else{
    $_SESSION['error']="Theme Updatted Unsuccessfully!!";
    header("location:viewtheme.php");
    // echo "<div class='alert alert-danger'>Query Failed.</div>";
  }



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
            <h1 class="m-0 text-dark"><i class="fas fa-edit"></i>&nbsp;<a href="viewtheme.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit theme</li>
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
                    <label>Color</label>
                    <br>
                    <input type="radio" value="red"<?php echo ($user["color"]=='red')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:red" class="fas fa-palette"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="purple"<?php echo ($user["color"]=='purple')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:purple" class="fas fa-palette"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="blue"<?php echo ($user["color"]=='blue')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:blue" class="fas fa-palette"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="#008000"<?php echo ($user["color"]=='#008000')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:#008000" class="fas fa-palette"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="orange"<?php echo ($user["color"]=='orange')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:orange" class="fas fa-palette"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="black"<?php echo ($user["color"]=='black')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:black" class="fas fa-palette"></i>
                    &nbsp;&nbsp;
                    <input type="radio" value="#5ECCA9"<?php echo ($user["color"]=='#5ECCA9')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:#5ECCA9" class="fas fa-palette"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="#5FCB71"<?php echo ($user["color"]=='#5FCB71')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:#5FCB71" class="fas fa-palette"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="#FF4500"<?php echo ($user["color"]=='#FF4500')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:#FF4500" class="fas fa-palette"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="#138086"<?php echo ($user["color"]=='#138086')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:#138086" class="fas fa-palette"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="#FFBD71"<?php echo ($user["color"]=='#FFBD71')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:#FFBD71" class="fas fa-palette"></i> 
                    &nbsp;&nbsp;
                     <input type="radio" value="#990011FF"<?php echo ($user["color"]=='#990011FF')?'checked':'' ?> name="color">&nbsp;&nbsp;<i style="color:#990011FF" class="fas fa-palette"></i>
                  </div>
                  <div class="form-group">
                    <label>Shade</label>
                    <br>
                    <input type="radio" value="#ff010db0"<?php echo ($user["shade"]=='#ff010db0')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#ff010db0" class="fas fa-paint-roller"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="#800080a8"<?php echo ($user["shade"]=='#800080a8')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#800080a8" class="fas fa-paint-roller"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="#0000ff8c"<?php echo ($user["shade"]=='#0000ff8c')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#0000ff8c" class="fas fa-paint-roller"></i> 
                    &nbsp;&nbsp;
                  <input type="radio" value="#0080009e"<?php echo ($user["shade"]=='#0080009e')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#0080009e" class="fas fa-paint-roller"></i> 
                    &nbsp;&nbsp;
                    <input type="radio" value="#ffa5009e"<?php echo ($user["shade"]=='#ffa5009e')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#ffa5009e" class="fas fa-paint-roller"></i>
                    &nbsp;&nbsp;
                    <input type="radio" value="#000000b8"<?php echo ($user["shade"]=='#000000b8')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#000000b8" class="fas fa-paint-roller"></i>
                    &nbsp;&nbsp;
                    <input type="radio" value="#5ecca99c"<?php echo ($user["shade"]=='#5ecca99c')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#5ecca99c" class="fas fa-paint-roller"></i>
                    &nbsp;&nbsp;
                    <input type="radio" value="#5fcb71a6"<?php echo ($user["shade"]=='#5fcb71a6')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#5fcb71a6" class="fas fa-paint-roller"></i>
                    &nbsp;&nbsp;
                    <input type="radio" value="#ff4500a8"<?php echo ($user["shade"]=='#ff4500a8')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#ff4500a8" class="fas fa-paint-roller"></i>
                    &nbsp;&nbsp;
                    <input type="radio" value="#13808699"<?php echo ($user["shade"]=='#13808699')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#13808699" class="fas fa-paint-roller"></i>
                    &nbsp;&nbsp;
                    <input type="radio" value="#ffbd719c"<?php echo ($user["shade"]=='#ffbd719c')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#ffbd719c" class="fas fa-paint-roller"></i>
                    &nbsp;&nbsp;
                    <input type="radio" value="#99001194"<?php echo ($user["shade"]=='#99001194')?'checked':'' ?> name="shade">&nbsp;&nbsp;<i style="color:#99001194" class="fas fa-paint-roller"></i>
                    </div>  
                  <div class="form-group">
                    <label>Font</label>
                    <select name="font" value="<?php echo $user['font'];?>" class="form-control">
                      <option value=" ">Select</option>
                      <option style="font-family:Rubik, sans-serif;" value="Rubik, sans-serif"
                      <?php 
                      if($user['font']=='Rubik, sans-serif')
                      {
                        echo "selected";
                      }
                      ?>
                      >Rubik</option>
                      <option style="font-family:Goldman, cursive;" value="Goldman, cursive"
                      <?php 
                      if($user['font']=='Goldman, cursive')
                      {
                        echo "selected";
                      }
                      ?>
                      >Goldman</option>
                      <option style="font-family:Pacifico, cursive;" value="Pacifico, cursive"
                      <?php 
                      if($user['font']=='Pacifico, cursive')
                      {
                        echo "selected";
                      }
                      ?>
                      >Pacifico</option>
                      <option style="font-family:Eater, cursive;" value="Eater, cursive"
                      <?php 
                      if($user['font']=='Eater, cursive')
                      {
                        echo "selected";
                      }
                      ?>
                      >Eater</option>
                      <option style="font-family:Patrick Hand SC, cursive;" value="Patrick Hand SC, cursive"
                      <?php 
                      if($user['font']=='Patrick Hand SC, cursive')
                      {
                        echo "selected";
                      }
                      ?>
                      >Patrick Hand</option>
                      <option style="font-family:Cinzel Decorative, cursive;" value="Cinzel Decorative, cursive"
                      <?php 
                      if($user['font']=='Cinzel Decorative, cursive')
                      {
                        echo "selected";
                      }
                      ?>
                      >Cinzel Decorative</option>
                    </select>
                      
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