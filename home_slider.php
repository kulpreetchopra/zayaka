<?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>  
<!-- Start slides -->
  <div id="slides" class="cover-slides">
    <ul class="slides-container">
      <?php

       include ('dbcon.php');
       $q = "select * from homeslider order by id desc"; 
       $query = mysqli_query($con, $q);
       while ($result = mysqli_fetch_array($query)) {
                 
     ?>
      <li class="text-center">
        <img src="<?php  echo 'admin/'. $result['image']?>" alt="Image♡">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="m-b-20"><strong><?php echo $result['tittle']?></strong></h1>
              <?php
date_default_timezone_set("Asia/Kolkata");
// echo date_default_timezone_get();
?>
              <p><?php echo " " . date("Y-m-d");echo " " . date("h:i:s A");echo " " . date("l");?><span style="color: <?php echo $theme['color']?>;font-weight:bold;"><?php if (date("l")=="Monday" or date("l")=="Sunday") {
  echo " Closed!!";
} ?></span></p>
              <p class="m-b-40 ashu"><?php echo $result['about']?></p>
              <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo $result['link']?>?username=<?php echo $name?>"><?php echo $result['name']?></a></p>
            </div>
          </div>
        </div>
      </li>
      <?php
      }
      ?>
    </ul>
    <div class="slides-navigation">
      <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
      <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
  </div>
  <!-- End slides -->
  <br>
  <!-- Welcome To Zyaka (ذائقہ ) Restaurent -->
 <!--  See how your users experience your website in realtime or view  <br> 
              trends to see any changes in performance over time. -->