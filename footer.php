<?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>  
<!-- start marque -->
<?php

       include ('dbcon.php');
       $q = "select * from sub_footer order by id desc"; 
       $query = mysqli_query($con, $q);
       $result = mysqli_fetch_array($query);
                 
     ?>
<div class="container-fluid">
<div class="row" style="background:black">
        <marquee scrollamount="13" direction="right">
            <?php
            $i=0;
            while ($i<= 10) {
            ?>
            <b style="color:#FFD700;font-size: 18px"><?php echo $result['bar']?> &nbsp;&nbsp;&nbsp;</b>
            <?php
            $i++;
            }
            ?>
        </marquee>
</div>
</div>
<br>
<!-- end marque -->
<!-- Start Footer -->
<!--love and support -->
    <div class="container-fluid"style="background-color:<?php echo $theme['color']?>">
      <div class="container ">
        <div class="row" >
          <div class="col-md-6"><br>
            <p style= "font-size: 18px; color: white;"><i class="fas fa-mobile-alt" style="color:white; font-size: 18px;"></i> <?php echo $result['social_title']?></p>
            <h3>
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
          </div>
          <div class="col-md-6"><br>
            <p style="font-size: 18px; color: white;"><i class="fas fa-phone-alt" style="color:white; font-size: 18px;"></i> <?php echo $result['contact_title']?> <a href="tel:<?php echo $result['contact_no']?>"style="color: white"><span ><?php echo $result['contact_no']?></span></a><br></p><p style="color: white;font-size: 15px;"> <?php echo $result['opening_hr']?></p>
          </div>
        </div>
        <br>
      </div>
    </div>
    <!-- love support end -->
<!--footer start-->
    <div class="container-fluid footer"><!--container fluid start-->
        <div class="container footer">
            <br>
        <div class="row">
            <?php

       include ('dbcon.php');
       $q2 = "select * from footer_services1 order by id desc"; 
       $query2 = mysqli_query($con, $q2);
       $result2 = mysqli_fetch_array($query2);
       $q4 = "select * from footer_services2 order by id desc"; 
       $query4 = mysqli_query($con, $q4);
       $result4 = mysqli_fetch_array($query4);
       ?>
            <div class="col-md-2 ashu">
                <b class="footer"style="color:#FFD700"><?php echo $result2['title']?></b>
                <br><br>
                <?php
       include ('dbcon.php');
       $q3 = "select * from footer_services1 order by id desc"; 
       $query3 = mysqli_query($con, $q3);
       while ($result3 = mysqli_fetch_array($query3)) {
                 
     ?>
                    <p><?php echo $result3['service']?></p>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-2 ashu">
                <b class="footer"style="color:#FFD700;"><?php echo $result4['title']?></b>
                <br><br>
                <?php
       include ('dbcon.php');
       $q5 = "select * from footer_services2 order by id desc"; 
       $query5 = mysqli_query($con, $q5);
       while ($result5 = mysqli_fetch_array($query5)) {
                 
     ?>
                    <p><?php echo $result5['services']?></p>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-4">
                <?php

       include ('dbcon.php');
       $q6 = "select * from main_footer order by id desc"; 
       $query6 = mysqli_query($con, $q6);
       $result6 = mysqli_fetch_array($query6);
       ?>
                <b class="footer"style="color:#FFD700;"><?php echo $result6['title']?></b>
                <br><br>
                <p style="text-align:justify;"><?php echo $result6['about']?></p>
                <button class="footer signup"><a style="color:white" href="<?php echo $result6['button_link']?>?username=<?php echo $name?>"><?php echo $result6['button_name']?></a></button>
                <hr>
                <h3>
                <a href="tel:<?php echo $result1['whatsaap']?>"><i class="<?php echo $result1['wicon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['linkedin']?>"><i class="<?php echo $result1['licon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['facebook']?>"><i class="<?php echo $result1['ficon']?>" style="color:white;font-size: 30px;"></i></a>
                <a href="<?php echo $result1['twitter']?>"><i class="<?php echo $result1['ticon']?>" style="color:white; font-size: 30px;"></i></a>
                <a href="<?php echo $result1['instagram']?>"><i class="<?php echo $result1['iicon']?>" style="color:white; font-size: 30px;"></i></a>
            </h3>
            <br>
            </div>
            <div class="col-md-4">
                <center>
                <a href="index.php?username=<?php echo $name?>" class="navbar-brand"><img src ="<?php  echo 'admin/'. $result6['image']?>" width="280px" height="280px"style="color:white;" alt="Image♡"></a>
                </center>
                
            </div>
            <br>
            <hr>
        </div>
        <br>
        <?php
include ('dbcon.php');

 $qc = "select * from team order by id desc"; 
 $queryc = mysqli_query($con, $qc);
 $dispc = mysqli_fetch_assoc($queryc);
     
?>
        <div class="container-fluid">
            <div class="row" style="background-color: white">
            <div class="col-md-12">
            <center><b style="color: black">All Rights Reserved &copy;<b style="color:<?php echo $theme['color']?>"><?php  echo $result6['copyright']?></b> Design By :<b style="color: <?php echo $theme['color']?>"> @<?php  echo $dispc['tittle']?></b></b></center>
        </div>
    </div>
    </div></div>

            <br>
        </div><!--row end-->
        </div>
    </div><!--container fluid end-->
    
    <!-- End Footer -->
    <a href="tel:<?php echo $result1['whatsaap']?>" id="contactme" title="Contact Us"><i class="<?php echo $result1['wicon']?>" aria-hidden="true"></i></a>
    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/order.js"></script>
    <script src="js/reservation.js"></script>
    <script src="js/registration.js"></script>
    <script src="js/contactus.js"></script>
    
</body>
</html>