<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$name= $_POST['name'];
    echo$email= $_POST['email'];
    echo$mobile= $_POST['mobile'];
    echo$address= $_POST['address'];
    echo$gender= $_POST['gender'];
    echo$username =$_POST['username'];
    echo$password =$_POST['password'];
    echo$interest =$_POST['interest'];
}
$sql = "INSERT INTO user(name,email,mobile,address,gender,username,password,forgott_pass,interest)VALUES('$name','$email','$mobile','$address','$gender','$username','$password','green','$interest');";

  
  if(mysqli_query($con, $sql)){
    header("location:../registration.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
