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
<!-- order form start -->
	<div class="container">
		<div class="card shadow ">
      <div class="row" style="padding: 2%">
        <div class="col-md-6 space">
        <br> 
          <h4 class="text-justify d"style="font-weight: bold;">CONTACT DETAILS</h4>
          <br>
        <form action="user/reservationreg.php" method="post" enctype="multipart/form-data" onsubmit="return reservation()">
        <div class="form-group">
          <label>FULL NAME: </label>
          <input type="text" id="rname" name="name" class="form-control" placeholder="Enter Your Full Name" value="<?php echo $d['name']?>">
          <span id="srname" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group">
          <label>EMAIL ADDRESS: </label>
          <input type="email" id="remail" name="email" class="form-control" placeholder="Enter Your Email Address" value="<?php echo $d['email']?>">
          <p class="font-weight-light">We"ll Never Share Your Email With Anyone Else</p>
          <span id="sremail" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group">
          <label>MOBILE NUMBER: </label>
          <input type="mobile" id="rmobile" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" value="<?php echo $d['mobile']?>">
          <span id="srmobile" class="text-danger font-weight-bold"> </span>
        </div><br>
        </div>
        <div class="col-md-6 space">
          <br>
        <h4 class="text-justify d"style="font-weight: bold;">RESERVE A TABLE</h4>
        <br>
        <div class="form-group">
          <label>RESERVATION DATE: </label>
          <input type="date" id="date" name="date" class="form-control" placeholder="">
          <span id="sdate" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group">
          <label>RESERVATION TIME: </label>
          <select name="time" id="time" class="form-control">
            <option value="-1">Select</option>
      <option>09:00 AM</option>
      <option>10:00 AM</option>
      <option>11:00 AM</option>
      <option>12:00 PM</option>
      <option>01:00 PM</option>
      <option>02:00 PM</option>
      <option>03:00 PM</option>
      <option>04:00 PM</option>
      <option>05:00 PM</option>
      <option>06:00 PM</option>
      <option>07:00 PM</option>
      <option>08:00 PM</option>
      <option>09:00 PM</option>
          </select>
          <span id="stime" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <label>NUMBER OF PERSONS: </label>
          <br>
          <select name="persons" id="pers" class="form-control">
      <option value="-1">Select</option>
      <option>01</option>
      <option>02</option>
      <option>03</option>
      <option>04</option>
      <option>05</option>
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
      </select>
          <span id="spers" class="text-danger font-weight-bold"> </span>
        </div><br>
      </div>
      <br>
      <input style="margin-left: 4%;margin-right: 4%" type="submit" name="submit" value="Reserve Now" class="btn-block btn btn-lg btn-circle btn-outline-new-white">
</form>
  </div>
    </div>
  </div>
  <br>