<?php

       include ('dbcon.php');
       $q = "select * from menuslider order by id desc"; 
       $query = mysqli_query($con, $q);
       $result = mysqli_fetch_array($query);
                 
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
<!-- menu window start -->
<div class="container c">
  <div class="row" style="background:<?php echo $theme['color']?>!important;border: 2px solid black;border-radius: 37px;">
    <?php
       include ('dbcon.php');
       $q = "select * from menuwindow order by id desc"; 
       $query = mysqli_query($con, $q);
       while ($result = mysqli_fetch_array($query)) {
                 
     ?>
     <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card">
      <div class="circle">
        <img src="<?php  echo 'admin/'. $result['image']?>" height="100%" width="100%">
      </div>
      <center>
        <?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>
      <div class="content"style="position: absolute;padding-left:20%!important;padding-right:25%;bottom: 17px;text-align: center;">
       <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo $result['link']?>?username=<?php echo $name?>"><?php echo $result['name']?></a></p>

      </div>
      </center>
    </div>
  </div>
    <?php
      }
      ?> 
</div>
</div>
<br>
<br>