<?php
include ('dbcon.php');

 $q = "select * from about order by id desc"; 
 $query = mysqli_query($con, $q);
 $disp = mysqli_fetch_assoc($query);
     
?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h3 class="welcome"><?php echo $disp['tittle']?></h3><br>
      <p class="story text-justify font-weight-light"><?php echo $disp['about']?></p>
      <?php

       include ('dbcon.php');
       $q1 = "select * from social_links order by id desc"; 
       $query1 = mysqli_query($con, $q1);
       $result1 = mysqli_fetch_array($query1);
       ?>
      <p class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo $result1['link']?>"><a href="tel:<?php echo $result1['whatsaap']?>"><i class="<?php echo $result1['wicon']?>" style="color:white; font-size: 25px;"></i></a>&nbsp;&nbsp;<a href="<?php echo $result1['instagram']?>"><i class="<?php echo $result1['iicon']?>" style="color:white; font-size: 25px;"></i></a>&nbsp;&nbsp;<a href="<?php echo $result1['facebook']?>"><i class="<?php echo $result1['ficon']?>" style="color:white; font-size: 25px;"></i></a></p>
      <br>
    </div><!--col md 8 end-->
    <hr>
    <div class="col-md-4">
      <p><iframe width="100%" height="315px" src="<?php echo $disp['vedio']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe></p>
    </div><!--col md 4 end-->
  </div><!--row end-->
</div><!--container end-->
<br>
<!-- welcome end -->
<!-- https://www.youtube.com/embed/hUQ6kVhoM88 -->
