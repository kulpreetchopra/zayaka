<?php
include ('dbcon.php');

 $q = "select * from services order by id desc"; 
 $query = mysqli_query($con, $q);
 $disp = mysqli_fetch_assoc($query);
     
?>

<!-- welcome start -->
<div class="container-fluid footer">
   <div class="row">
    <div class="col-md-12">
      <center><h3  style="background-color:<?php echo $theme['color']?>!important;"><?php echo $disp['tittle']?></h3></center>
      </div><!-- col md 12 end-->
   </div> <!-- row end-->
  </div><!-- container -fluid end--><br>
<!-- services start -->
  <div class="container-fluid">
        <div  class="container">
          <div class="row" style="background:<?php echo $theme['color']?>!important;;border: 2px solid black;border-radius: 37px;">
            <div class="col-lg-1"></div>
            <div class="col-lg-5" style="padding: 30px;">
              <div class="row" >
                <h2 style="letter-spacing: 2px;color:#fff;"><?php echo $disp['tittle']?></h2>
                <p style="color:yellow;text-align:justify"><?php echo $disp['about']?></p>
              </div> <!-- row -->
            </div> <!-- col-5 -->
            <div class="col-lg-5">
              <div class="row">
                <h3 style="letter-spacing: 2px;padding-left: 20px;padding-top:10px; font-size: 18px;color:yellow;;"><?php echo $disp['name']?></h3>
                <ul class="service-points" style="color:yellow;line-height: 32px;word-spacing: 2px;font-size: 15px!important;"> 
                  <?php
       include ('dbcon.php');
       $q1 = "select * from services order by id asc"; 
       $query1 = mysqli_query($con, $q1);
       while ($result = mysqli_fetch_array($query1)) {
                 
     ?>
                  <li>
                    <span style="color: #fff;"><?php echo $result['service']?></span>
                  </li>
                  <?php
                }
                ?>
                </ul>
              </div><!-- row -->
            </div><!-- col-5 -->
            <div class="col-lg-1">
        
            </div>
          </div>
        </div>
      </div>
      <!-- end -->
      <br>