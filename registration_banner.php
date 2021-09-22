<?php

       include ('dbcon.php');
       $q = "select * from registrationbanner order by id desc"; 
       $query = mysqli_query($con, $q);
       $result = mysqli_fetch_array($query);
                 
     ?>
  <div class="all-page-title"style="padding: 250px 0 150px;
    background: url(<?php  echo 'admin/'. $result['image']?>) no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: 0 0;
    position: relative;">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12">
          <h1><?php echo $result['name']?></h1>
          <?php
date_default_timezone_set("Asia/Kolkata");
// echo date_default_timezone_get();
?>
              <p style="color: white;"><?php echo " " . date("Y-m-d");echo " " . date("h:i:s A");echo " " . date("l");?><span style="color:<?php echo $theme['color']?>!important;;font-weight:bold;"><?php if (date("l")=="Monday" or date("l")=="Sunday") {
  echo " Closed!!";
} ?></span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- End All Pages -->
  <br>
<!-- welcome start -->
<div class="container-fluid footer">
  <div class="row">
    <div class="col-md-12">
      <center><h3  style="background-color:<?php echo $theme['color']?>!important;"><?php echo $result['tittle']?></h3>
      </center>
    </div><!-- col md 12 end-->
  </div> <!-- row end-->
</div>
<br>  
