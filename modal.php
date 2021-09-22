<?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>
<!-- modal start -->
  <div class="modal fade" id="mymodel">
      <div class="modal-dialog">
        <div class="modal-content"  >
          <div class="modal-header  lg alert "style="background-color:<?php echo $theme['color']?>">
            <h4 class="modal-title" style="font-weight: bold;color: white" ><i class="fa fa-bell fa-pad  faa-ring animated" aria-hidden="true" style="color: white"></i>Important Alerts !!</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4 style="color:<?php echo $theme['color']?>"> Latest Updates</h4>
            <ul>
              <?php
       include ('dbcon.php');
       $q = "select * from modal order by id desc"; 
       $query = mysqli_query($con, $q);
       while ($result = mysqli_fetch_array($query)) {
                 
     ?>
              <li><a style="color: black;text-decoration: none" href="<?php echo $result['link']?>?username=<?php echo $name?>">
                <img class="alignnone size-full wp-image-2179" src="http://www.gifandgif.eu/animated_gif/New/Animated%20Gif%20New%20%2826%29.gif" alt="New" width="30" height="15"><?php echo $result['tittle']?></a>
              </li><br>
              <?php
      }
      ?>
            </ul>
          <hr>
            <center>
              <h3 style="background-color:<?php echo $theme['shade']?>">
                <?php

       include ('dbcon.php');
       $q1 = "select * from social_links order by id desc"; 
       $query1 = mysqli_query($con, $q1);
       $result1 = mysqli_fetch_array($query1);
       ?>
                <a href="tel:<?php echo $result1['whatsaap']?>"><i class="<?php echo $result1['wicon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['linkedin']?>"><i class="<?php echo $result1['licon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['facebook']?>"><i class="<?php echo $result1['ficon']?>" style="color:white;font-size: 30px;"></i></a>
                <a href="<?php echo $result1['twitter']?>"><i class="<?php echo $result1['ticon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['instagram']?>"><i class="<?php echo $result1['iicon']?>" style="color:white; font-size: 30px;"></i></a>
              </h3>
            </center>

      </div>
      
    </div>
  </div>
</div>
  <!-- modal end -->
