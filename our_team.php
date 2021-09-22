<?php
include ('dbcon.php');

 $q = "select * from team order by id desc"; 
 $query = mysqli_query($con, $q);
 $disp = mysqli_fetch_assoc($query);
     
?>
<div class="container-fluid footer">
   <div class="row">
    <div class="col-md-12">
      <center><h3  style="background-color:<?php echo $theme['color']?>!important;"><?php echo $disp['tittle']?></h3>
      </center>
    </div><!-- col md 12 end-->
  </div> <!-- row end-->
</div><!-- container -fluid end-->
<br>
<!-- menu window start -->
<div class="container">
    <div class="row">
        <?php
       include ('dbcon.php');
       $q = "select * from team order by id asc"; 
       $query = mysqli_query($con, $q);
       while ($result = mysqli_fetch_array($query)) {
                 
     ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="<?php  echo 'admin/'. $result['image']?>">
                    <ul class="social">
                        <li><a style="text-decoration: none;" href="<?php echo $result['facebook']?>" class="fa fa-facebook"></a></li>
                        <li><a style="text-decoration: none;" href="<?php echo $result['instragram']?>" class="fa fa-instagram"></a></li>
                        <li><a style="text-decoration: none;" href="<?php echo $result['linkedin']?>" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title"><?php echo $result['name']?></h3>
                    <span class="post"><?php echo $result['about']?></span>
                </div>
            </div>
        </div>
        <?php
      }
      ?>
    </div>
</div>
<br>