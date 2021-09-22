<?php
include ('dbcon.php');

 $q = "select * from homewindow order by id desc"; 
 $query = mysqli_query($con, $q);
 $disp = mysqli_fetch_assoc($query);
       ?>
<div class="container-fluid footer">
   <div class="row">
    <div class="col-md-12">
      <center><h3  style="background-color:<?php echo $theme['color']?>"><?php echo $disp['tittle']?></h3>
      </center>
    </div><!-- col md 12 end-->
  </div> <!-- row end-->
</div><!-- container -fluid end-->
<br>
<?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>
<!-- menu window start -->
<div class="container c">
  <div class="row" style="background:<?php echo $theme['color']?>;border: 2px solid black;border-radius: 37px;">
    <?php
       include ('dbcon.php');
       $q = "select * from homewindow order by id desc"; 
       $query = mysqli_query($con, $q);
       while ($result = mysqli_fetch_array($query)) {
                 
     ?>
     <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card">
      <div class="circle">
        <img src="<?php  echo 'admin/'. $result['image']?>" height="100%" width="100%">
      </div>
      <center>
      <div class="content" style="position: absolute;padding-left:20%!important;padding-right:25%;bottom: 17px;text-align: center;">
       <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo $result['link']?>?username=<?php echo $name?>"><?php echo $result['name']?></a>
       </p>

      </div>
      </center>
    </div>
  </div>
    <?php
      }
      ?>
      <?php
       include ('dbcon.php');
       $q1 = "select * from location order by id desc"; 
       $query1 = mysqli_query($con, $q1);
       while ($result1 = mysqli_fetch_array($query1)) {
                 
     ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card tz-gallery">
          <div class="circle">
            <iframe src="<?php  echo $result1['src']?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe></a>
          </div>
          <div class="content" style="position: absolute;padding-left:20%!important;padding-right:25%;bottom: 17px;text-align: center;">
            <p><a class="lightbox btn btn-lg btn-circle btn-outline-new-white" href="<?php  echo $result1['link']?>"><?php  echo $result1['name']?></a></p>
          </div>
        </div>
        </div>
        <?php
      }
        ?> 
</div>
</div>
<br>
<br>
<!-- https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.9304138165667!2d78.16096461498327!3d26.23145048342569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c68cd645d54f%3A0x3638e0fd60701df0!2sShri%20Koteshwar%20Mahadev%20Temple%2C%20Gwalior!5e0!3m2!1sen!2sin!4v1605259051336!5m2!1sen!2sin -->