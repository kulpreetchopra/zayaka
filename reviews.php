<?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>
<!-- start reviews -->
<div class="container-fluid footer">
   <div class="row">
    <div class="col-md-12">
      <center><h3  style="background-color:<?php echo $theme['color']?>">Customer Reviews</h3></center>
      </div><!-- col md 12 end-->
   </div> <!-- row end-->
  </div><!-- container -fluid end--><br>
<div class="container" >
  <div class="row" style="background:<?php echo $theme['color']?>;border: 2px solid black;border-radius: 37px;">
    <div class="text-center col-md-12">
      <div class="heading-title text-center">
        <div class="col-md-8 text-center mr-auto ml-auto">
            <br>
            <h4 style="color: white;text-align: center;">Please Give Us Ratings</h4>
            <p style="color: white;text-align: center;"><?php

       include ('dbcon.php');

       $q1 = "select sum(rate)/count(rate) from ratings;";
       $query1 = mysqli_query($con, $q1);
       $result1 = mysqli_fetch_array($query1);
       $average = array_sum($result1) / count($result1);
       ?>
        Average Ratings <?php
        echo $average;  
        if($average>=0 && $average<=1.5){
          echo"&#129314;";
        }
        if($average>=1.6 && $average<=2.5){
          echo"&#128528;";
        }
        if($average>=2.6 && $average<=3.5){
          echo"&#128522;";
        }
        if($average>=3.6 && $average<=4.5){
          echo"&#129321;";
        }
        if($average>=4.6 && $average<=5){
           echo"&#128525;";
        }
        ?> out of 5&#128525;</p>
            <form action="ratingreg.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="username" value="<?php echo $name;?>">
            <div class="rate">
    <input style="display:none;" type="radio" id="star5" name="rate" value="1" />
    <label for="star5" title="text">5 stars</label>
    <input style="display:none;" type="radio" id="star4" name="rate" value="2" />
    <label for="star4" title="text">4 stars</label>
    <input style="display:none;" type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input style="display:none;" type="radio" id="star2" name="rate" value="4" />
    <label for="star2" title="text">2 stars</label>
    <input style="display:none;" type="radio" id="star1" name="rate" value="5" />
    <label for="star1" title="text">1 star</label>
          </div>
  <button type="submit" name="submit" style="color:<?php echo $theme['color']?>" class="fa fa-paper-plane-o"></button>
  </form>
          </div>
        </div>
      </div>
<div class="container-fluid">
<div class="carousel slide " data-ride="carousel" id="myslide">
  <div class="carousel-inner imgmobile">
    <?php
       include ('dbcon.php');
       $q = "select * from ratings order by id desc"; 
       $query = mysqli_query($con, $q);
       $status ="active";
       $j=0;
       while ($result = mysqli_fetch_array($query)) {
        if($j==0){
          $status ="active";
        }
        else{
          $status =" ";
        }
        ?>
    <div class="carousel-item <?php echo $status ?>" data-interval="3000">
        <h5 class="text-center " style="color: yellow">
          <?php
          if($result['rate']==5) {
            echo"&#128525;";
          }
          if($result['rate']==4) {
            echo"&#129321;";
          }
          if($result['rate']==3) {
            echo"&#128522;";
          }
          if($result['rate']==2) {
            echo"&#128528;";
          }
          if($result['rate']==1) {
            echo"&#129314;";
          }
          ?>
        <?php echo $result['username']?></h5>
        <div class="col-md-8 text-center mr-auto ml-auto">
          <center>
            <p><a href="#">
              <?php
              $i=1;
              while($i<=$result['rate']){
                ?>
              <i class="fas fa-star" style="color:yellow; font-size: 22px;"></i>
             <?php
             $i++; 
              }
              ?>
              </a>
            </p>
            <br>
          </center>
        </div>
    </div>
    <?php
    $j++;
  }
  ?>
  </div><!-- end  carousel-inner-->
 
  

<a href="#myslide" data-slide="prev" class="carousel-control-prev">
       <span style="color:red;" class="carousel-control-prev-icon"></span>
    </a>
  

<a href="#myslide" data-slide="next" class="carousel-control-next">
       <span class="carousel-control-next-icon"></span>
    </a>
 
 
        </div><!--  carousel slide end-->
 
        </div><!--  carousel slide end-->
      </h5>
    </div>
  </h5>
</div>
<!-- end reviews -->
<br>