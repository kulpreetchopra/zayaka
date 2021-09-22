<?php
include "dbcon.php";             
if(isset($_GET['username'])){
$name=$_GET['username'];
$query="SELECT * FROM `user` WHERE `username`='$name'";
$done=mysqli_query($con,$query);
if($d=mysqli_fetch_array($done)){

}
}
?>
<?php

       include ('dbcon.php');
       $q = "select * from snack order by id desc"; 
       $query = mysqli_query($con, $q);
       $result = mysqli_fetch_array($query);
       $table="snack";           
     ?>
<!-- welcome start -->
<div class="container-fluid footer">
  <div class="row">
    <div class="col-md-12">
      <center><h3  style="background-color:<?php echo $theme['color']?>!important;"><?php echo $result['tittle']?></h3></center>
    </div><!-- col md 12 end-->
  </div> <!-- row end-->
</div>
<br>
<br>
<?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>
<!-- brands start -->
  <div class="container">
    <div class="row ">
      <?php
       include ('dbcon.php');
       $q = "select * from snack order by id desc"; 
       $query = mysqli_query($con, $q);
       while ($result = mysqli_fetch_array($query)) {
                 
     ?>
      <div class="col-lg-4 col-md-6 special-grid drinks inner animate__animated animate__zoomIn">
        <div class="gallery-single fix">
          <img src="<?php  echo 'admin/'. $result['image']?>" style="height:230px;width:550px;" class="img-fluid" alt="Image">
          <a href="<?php echo $result['link']?>?id=<?php echo $result['id']?>&username=<?php echo $name?>&tablen=<?php echo $table?>">
            <div class="why-text">
              <h5><?php echo $result['name']?><b> <img class="alignnone size-full wp-image-2179" src="https://thumbs.gfycat.com/AptExhaustedAngelfish-size_restricted.gif" width="50" height="30"></b></h5>
              <p><?php echo $result['about']?></p>
              <p>Item Number: <?php echo $result['item_no']?></p>
              <h5>₹ <?php echo $result['price']?></h5>
            </div>
          </a>
        </div>
      </div>
      <?php
     }
      ?>
      </div>
  </div>
    <br>