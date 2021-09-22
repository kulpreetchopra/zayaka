<?php
include "dbcon.php";
 if(isset($_GET['username'])){
  $name=$_GET['username'];
  if($name=="You Are Not Logged in") {
    $d = ["name" => "","email" => "","mobile" => "","address" => "",];
  }
  else{
  $query="SELECT * FROM `user` WHERE `username`='$name'";
  $done=mysqli_query($con,$query);
  if($d=mysqli_fetch_array($done)){
}
  }
}
?>
<?php
include "dbcon.php"; 
                  if(isset($_GET['id'])){
                      $name1=$_GET['id'];
                      if(isset($_GET['tablen'])){
                      $tablen=$_GET['tablen'];
                      $query1="SELECT * FROM `$tablen` WHERE `id`='$name1'";
                      $done1=mysqli_query($con,$query1);}
                      if($d1=mysqli_fetch_array($done1)){

                      }
                  }
                  else{
                      $d1 = ["name" => "","item_no" => "","price" => "",];
                  }
                  ?>
<!-- order form start -->
	<div class="container">
		<div class="card shadow">
      <div class="row" style="padding: 2%">
        <div class="col-md-6 space">
        <br> 
          <h4 class="text-justify d"style="font-weight: bold;">USER INFORMATION</h4>
          <br>
          <form action="user/orderreg.php" method="post" enctype="multipart/form-data" onsubmit="return order()">
        <div class="form-group">
          <label for="user" >FULL NAME: </label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Full Name" value="<?php echo $d['name']?>">
          <span id="sname" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group">
          <label for="user" >EMAIL ADDRESS: </label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email Address" value="<?php echo $d['email']?>">
          <p class="font-weight-light">We"ll Never Share Your Email With Anyone Else</p>
          <span id="semail" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group">
          <label  for="user" >MOBILE NUMBER: </label>
          <input type="mobile" id="mobile" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" value="<?php echo $d['mobile']?>">
          <span id="smobile" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <label  for="user" >PERMANENT ADDRESS: </label>
          <textarea type="text" id="add" name="address" class="form-control" placeholder="Enter Your Address" ><?php echo $d['address']?></textarea>
          <span id="sadd" class="text-danger font-weight-bold"> </span>
        </div>
        
        </div>
        <div class="col-md-6 space">
          <br>
        <h4 class="text-justify d" style="font-weight: bold;">ORDER INFORMATION</h4>
        <br>
        <div class="form-group">
          <label for="user" >ITEM NAME: </label>
          <input type="text" id="oname" name="oname" class="form-control" placeholder="Enter Your's Order Item Name" value="<?php echo $d1['name']?>">
          <span id="soname" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <label for="user" >ITEM NUMBER: </label>
          <input type="text" id="onumber" name="onumber" class="form-control" placeholder="Enter Your's Order Item Number" value="<?php echo $d1['item_no']?>">
          <span id="sonumber" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <label  for="user" >ITEM QUANTITY: </label>
          <br>
          <select name="oqty" id="oqty" class="form-control">
      <option value="-1">Select</option>
      <option value="01">01</option>
      <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
      </select>
          <span id="soqty" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <label  for="user" >ITEM PRICE: </label>
          <input type="text" id="oprice" name="oprice" class="form-control" placeholder="Enter Your's Order Item Price" value="<?php echo $d1['price']?>">
          <span id="soprice" class="text-danger font-weight-bold"> </span>
        </div>
      </div>
      <br>
      <input style="margin-left: 4%;margin-right: 4%" type="submit" name="submit" value="Order Now" class="btn-block btn btn-lg btn-circle btn-outline-new-white">
</form>
  </div>
    </div>
  </div>
  <br>