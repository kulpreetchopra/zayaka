 <!-- order form start -->
	<div class="container">
		<div class="card shadow ">
      <div class="row" style="padding: 2%">
        <div class="col-md-6 space">
        <br> 
        <form action="user/userreg.php" onsubmit="return registration()" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="user" >FULL NAME: </label>
          <input type="text" id="rname1" name="name" class="form-control" placeholder="Enter Your Full Name">
          <span id="srname1" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group">
          <label for="user" >EMAIL ADDRESS: </label>
          <input type="email" id="remail1" name="email" class="form-control" placeholder="Enter Your Email Address">
          <p class="font-weight-light">We"ll Never Share Your Email With Anyone Else</p>
          <span id="sremail1" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group">
          <label  for="user" >MOBILE NUMBER: </label>
          <input type="mobile" id="rmobile1" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" >
          <span id="srmobile1" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <label  for="user" >PERMANENT ADDRESS: </label>
          <textarea type="text" id="radd" name="address" class="form-control" placeholder="Enter Your Address" ></textarea>
          <span id="sradd" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <label for="user" > GENDER: </label>
          <br>
      <input type="radio" id="gen1" value="male" name="gender">MALE
      <br>
      <input type="radio" id="gen2" value="female" name="gender">FEMALE
      <br>
          <span id="gender" class="text-danger font-weight-bold"> </span>
        </div>
        </div>
        <div class="col-md-6 space">
        <br>
        <div class="form-group">
          <label for="user" >ADD USERNAME: </label>
          <input type="text" id="username" name="username" class="form-control" placeholder="Add Username">
          <span id="susername" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <label for="user" >CONFIRM USERNAME: </label>
          <input type="text" id="confusername" name="" class="form-control" placeholder="Confirm Username">
          <span id="sconfusername" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <label for="user" >ADD PASSWORD: </label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Add Password">
          <span id="spassword" class="text-danger font-weight-bold"> </span>
        </div><br>
        <div class="form-group">
          <label for="user" >CONFIRM PASSWORD: </label>
          <input type="password" id="confpassword" name="" class="form-control" placeholder="Confirm Password">
          <span id="sconfpassword" class="text-danger font-weight-bold"> </span>
        </div>
        <br>
        <div class="form-group">
          <label  for="user" >YOUR INTEREST: </label>
          <br>
          <select name="interest" id="interest" name="interest" class="form-control">
      <option value="-1">Select</option>
      <option value="Vegeterian Food">Vegeterian Food</option>
      <option value="Non-Vegeterian Food">Non-Vegeterian Food</option>
            <option value="Not To Say">Not To Say</option>
      </select>
          <span id="sinterest" class="text-danger font-weight-bold"> </span>
        </div>
      </div>
      <br>
      <input style="margin-left: 4%;margin-right: 4%" type="submit" name="submit" value="Register Now" class="btn-block btn btn-lg btn-circle btn-outline-new-white">
</form>
  </div>
    </div>
  </div>
  <br>