<?php
error_reporting(0);
?>
<?php include("session.php");?>
<?php

       include ('dbcon.php');
       $user=$_SESSION['password'];
       $q = "SELECT * FROM `user` WHERE  `password`='$user'";
       $query = mysqli_query($con, $q);
       $result = mysqli_fetch_array($query);
    //    echo $result['image'];
       
  ?>
<div class="card">
<div class="container" style="color: black">
    <div class="row my-2">
        <div class="col-lg-12 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active"><i class="fas fa-eye"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link"><i class="fas fa-user-edit"></i> Edit</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#order" data-toggle="tab" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#reservation" data-toggle="tab" class="nav-link"><i class="fas fa-shopping-cart"></i> Reservation</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link"><i class="fas fa-comments"></i> Messages</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <div class="row">
                        <div class="col-md-12">
                          <?php
date_default_timezone_set("Asia/Kolkata");
// echo date_default_timezone_get();
?>
                            <h5><span style="border-bottom-style: ridge;border-bottom-color:black;"><i class="fas fa-user"></i> <?php echo$result['username']?> </span><span><i class="fas fa-history"></i> <?php echo " " . date("Y-m-d");echo " " . date("h:i:s A");echo " " . date("l");?><span style="color:<?php echo $theme['color']?>!important;font-weight:bold;"><?php if (date("l")=="Monday" or date("l")=="Sunday") {
  echo " Closed!!";
} ?></span></span></h5><hr>
                            <div class="row">
                                <div class="col-md-6">
                                   <p>Full Name: <span><?php echo$result['name']?></span></p>
                                   <p>Email Address: <span><?php echo$result['email']?></span></p>
                                   <p>Contact Number: <span><?php echo$result['mobile']?></span></p> 
                                   <p>Permanent Address: <span><?php echo$result['address']?></span></p> 
                                </div>
                                <div class="col-md-6">
                                    <p>Gender: <span><?php echo$result['gender']?></span></p>
                                    <p>Username: <span></i><?php echo$result['username']?></span></p>
                                    <p>Password: <span><?php echo$result['password']?></span></p>
                                    <p>Food Interest: <span><?php echo$result['interest']?></span></p> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                  <?php

       include ('dbcon.php');
       
       $user1=$_SESSION['password'];
       $q1 = "select * from user join message on user.name=message.name WHERE  `password`='$user1' order by message.id asc";
       $query1 = mysqli_query($con, $q1);
       
       $q2 = "select * from user join adminreply on user.name=adminreply.name WHERE  `password`='$user1' order by adminreply.message_id asc";
       $query2 = mysqli_query($con, $q2);
       
       while ($result1 = mysqli_fetch_array($query1)) {
  ?>
                    <p class ="alert chatr"><i class="fas fa-user"></i> <span><?php echo$result1['name']?>: </i> <span><i class="fas fa-comment-dots"></i> <?php echo $result1['message']?></span><span> <i class="fas fa-history"></i> <?php echo $result1['message_time']?></span></p>
                    <?php
                     while ($result2 = mysqli_fetch_array($query2)) {
                    ?>
                    <p class ="alert chatl"><i class="fas fa-user-friends"></i></i> <span><?php echo$result2['admin']?>: </i><span> <i class="fas fa-comments"></i> <?php echo $result2['reply']?></span> <i class="fas fa-history"></i> <?php echo $result2['reply_time']?></span></p>
                       <?php
                       break;
                     }
         }
        ?>
        <hr> 
        <form action="mssgreg.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="name" value="<?php echo $result['name'] ?>">
          <input type="hidden" name="email" value="<?php echo $result['email'] ?>">
          <input type="hidden" name="mobile" value="<?php echo $result['mobile'] ?>">
          <div class="row">
            <div class="col-md-11 ">
              <div class="form-group">
                <textarea data-emojiable="true" style="border:3px solid black;color:black" name="message" type="text" rows="1" placeholder="&#129488 Enter Message To Chatbox.." class="form-control" name="description"></textarea>
              </div>
            </div>
            <div class="col-md-1 ">
              <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
            </div>
          </div>
        </form>
                </div>

                <?php

       include ('dbcon.php');
       
       $user1=$_SESSION['password'];
       $q4 = "select * from user join order_details on user.name=order_details.name and user.email=order_details.email WHERE  `password`='$user1'  order by order_details.id desc";
       $query4 = mysqli_query($con, $q4);
  ?>
               <!-- order cart -->
                <div class="tab-pane" id="order">
                <div class="table-responsive">
                <table class="table table-hover table-bordered">
                  <thead>               
                    <tr>
                      <th>Order_No:</th>
                      <th>Item_No:</th>
                      <th>Item_Name:</th>
                      <th>Order_Date:</th>
                      <th>Price:</th>
                      <th>Quantity:</th>
                      <th>Bill:</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
                      while ($result4 = mysqli_fetch_array($query4)) {
                        $totalp = $result4['oprice']*$result4['oqty'];
                      ?>
                        <td><?php echo$result4['id']?></td>
                        <td><?php echo$result4['onumber']?></td>
                        <td><?php echo$result4['oname']?></td>
                        <td><?php echo$result4['otime']?></td>
                        <td>₹<?php echo$result4['oprice']?></td>
                        <td><?php echo$result4['oqty']?></td>
                        <td>₹<?php echo $totalp ?></td>
                    </tr>
                    <?php
                  }
                  ?>  
                  </tbody> 
                </table>
              </div>
                </div>
                <?php

       include ('dbcon.php');
       
       $user1=$_SESSION['password'];
       $q3 = "select * from user join reservation on user.name=reservation.name and user.email=reservation.email WHERE  `password`='$user1'  order by reservation.id desc";
       $query3 = mysqli_query($con, $q3);
  ?>
                <!-- reservation -->
                <div class="tab-pane" id="reservation">
                    <div class="table-responsive">
                <table class="table table-hover table-bordered">
                  <thead>                  
                    <tr>
                      <th>Reservation_No</th>
                      <th>Reservation_Date</th>
                      <th>Reservation_Time</th>
                      <th>Persons</th>
                      <th>Reservation@</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
                      while ($result3 = mysqli_fetch_array($query3)) {
                      ?>
                        <td><?php echo$result3['id']?></td>
                        <td><?php echo$result3['date']?></td>
                        <td><?php echo$result3['time']?></td>
                        <td><?php echo$result3['persons']?></td>
                        <td><?php echo$result3['otime']?></td>
                    </tr>
                    <?php
                  }
                  ?> 
                  </tbody> 
                </table>
              </div>
                </div>
                <!-- edit profile -->
                <div class="tab-pane" id="edit">
                    <form action="edit.php" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Full Name:</label>
                            <div class="col-lg-9">
                               <input type="text" class="form-control" name="name" value="<?php echo $result['name'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email Address:</label>
                            <div class="col-lg-9">
                               <input type="email" class="form-control" name="email" value="<?php echo $result['email'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Mobile Number:</label>
                            <div class="col-lg-9">
                                <input type="mobile" class="form-control" name="mobile" value="<?php echo $result['mobile'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Permanent Address:</label>
                            <div class="col-lg-9">
                                <textarea type="text" class="form-control" name="address"><?php echo $result['address'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Gender:</label>
                            <div class="col-lg-9">
                                <br>
                    <input type="radio" value="male"<?php echo ($result["gender"]=='male')?'checked':'' ?> name="gender">Male
             <?php
           if($result["gender"]=='male')
           {
            echo "♡";
             }
          ?><br>
            <input type="radio" value="female"<?php echo ($result["gender"]=='female')?'checked':'' ?> name="gender">Female
             <?php
           if($result["gender"]=='female')
           {
            echo "♡";
             }
          ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="username" value="<?php echo $result['username'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="password" value="<?php echo $result['password'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Interest:</label>
                            <div class="col-lg-9">
          <select name="interest" id="interest" value="<?php echo $result['interest'];?>" name="interest" class="form-control">
      <option value="-1">Select</option>
      <option value="Vegeterian Food" <?php
        if($result['interest']=='Vegeterian Food')
        {echo "selected";}
      ?>>Vegeterian Food</option>
      <option value="Non-Vegeterian Food" <?php
        if($result['interest']=='Non-Vegeterian Food')
        {echo "selected";}
      ?>>Non-Vegeterian Food</option>
      <option value="Not To Say" <?php
        if($result['interest']=='Not To Say')
        {echo "selected";}
      ?>>Not To Say</option>
      </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <button type="reset" class="btn btn-secondary"><a href="dashboard.php" style="color:white">Cancel</a></button>
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>