<?php
include "dbcon.php";
 if(isset($_GET['username'])){
  $name=$_GET['username'];
  if($name=="You Are Not Logged in") {
    $d = ["name" => "","email" => "","mobile" => "",];
  }
  else{
  $query="SELECT * FROM `user` WHERE `username`='$name'";
  $done=mysqli_query($con,$query);
  if($d=mysqli_fetch_array($done)){
}
  }
}
?>
<!--contact form start -->
	<div class="container">
		<div class="card shadow">
      <div class="row" style="padding: 2%">
        <div class="col-md-6 space">
        <br> 
          <h4 class="text-justify d"style="font-weight: bold;">SEND US MESSAGE</h4>
          <br>
          <form action="user/contactreg.php" method="post" enctype="multipart/form-data" onsubmit="return Messageme()">
        <div class="form-group">
          <label for="user" >FULL NAME: </label>
          <input type="text" id="user4" name="name" class="form-control" placeholder="Enter Your Full Name" value="<?php echo $d['name']?>">
          <span id="username4" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group">
          <label for="user" > EMAIL ADDRESS: </label>
          <input type="email" id="email4" name="email" class="form-control" placeholder="Enter Your Email Address" value="<?php echo $d['email']?>">
          <p class="font-weight-light">We"ll Never Share Your Email With Anyone Else</p>
          <span id="emailid4" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group">
          <label  for="user" > MOBILE NUMBER: </label>
          <input type="mobile" id="mobile4" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" value="<?php echo $d['mobile']?>">
          <span id="mob4" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <textarea type="text" id="mess1" name="message" class="form-control" placeholder="Enter Your Message" ></textarea>
          <p class="font-weight-light">Message</p>
          <span id="message1" class="text-danger font-weight-bold"> </span>
        </div>
      <input type="submit" name="submit" value="Submit" class="btn-block btn btn-lg btn-circle btn-outline-new-white">
        </div>
        <div class="col-md-6 space">
          <br>
        <h4 class="text-justify d" style="font-weight: bold;">CONTACT INFORMATION</h4>
        <br>
            <?php
       include ('dbcon.php');
       $q = "select * from contact_info order by id desc"; 
       $query = mysqli_query($con, $q);
       while ($result = mysqli_fetch_array($query)) {
                 
     ?>
            <h6 class="" style="color:<?php echo $theme['color']?>!important;"><?php echo $result['tittle']?></h6>
            <p class=""><?php echo $result['contact']?></p>
            <hr>
            <?php
          }
          ?>
            <center>
              <h3 style="background-color:<?php echo $theme['color']?>!important;">
                <?php

       include ('dbcon.php');
       $q1 = "select * from social_links order by id desc"; 
       $query1 = mysqli_query($con, $q1);
       $result1 = mysqli_fetch_array($query1);
       ?>
              <a href="tel:<?php echo $result1['whatsaap']?>"><i class="fab fa-whatsapp" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['linkedin']?>"><i class="fab fa-linkedin fa-2x" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['facebook']?>"><i class="fab fa-facebook-f" style="color:white;font-size: 30px;"></i></a>
                <a href="<?php echo $result1['twitter']?>"><i class="fab fa-twitter" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['instagram']?>"><i class="fab fa-instagram fa-2x" style="color:white; font-size: 30px;"></i></a>
              </h3>
            </center>
        <br>
      </div>
</form>
  </div>
    </div>
  </div>
  <br>
  <br>
  <!-- asked start -->
  <?php
include ('dbcon.php');

 $q = "select * from faq order by id desc"; 
 $query = mysqli_query($con, $q);
 $disp = mysqli_fetch_assoc($query);
     
?>

<!-- welcome start -->
<div class="container-fluid footer">
   <div class="row">
    <div class="col-md-12">
      <center><h3  style="background-color:<?php echo $theme['color']?>!important;"><?php echo $disp['tittle'] ?></h3></center>
      </div><!-- col md 12 end-->
   </div> <!-- row end-->
  </div><!-- container -fluid end--><br>
  <!-- faq's -->
    <div  class="container">
      <div class="row" style="background:<?php echo $theme['color']?>!important;;border: 2px solid black;border-radius: 37px;padding: 2%">
        <div class="col-md-6">
        <?php
       include ('dbcon.php');
       $q1 = "select * from faq order by id asc"; 
       $query1 = mysqli_query($con, $q1);
       $i=0;
       while ($result1 = mysqli_fetch_array($query1) or $i) {
                 
     ?>
          <h5 style="color:white "><i class="far fa-check-circle" style="color:white; font-size: 20px;"></i>&nbsp;<?php echo $result1['faq'] ?><br></h5>
        <?php
        $i++;
        if($i==4) {
          ?>
        </div>
        <div class="col-md-6">
          <?php
        }
        if($i>7) {
          break;
        }
        }
        ?>
      </div>
      </div>
    </div>
  </div>
  <!-- asked end-->
  <br>