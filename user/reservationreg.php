<?php include("session.php");?>
<?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?>             ?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$name= $_POST['name'];
    echo$email= $_POST['email'];
    echo$mobile= $_POST['mobile'];
    echo$date= $_POST['date'];
    echo$time= $_POST['time'];
    echo$persons= $_POST['persons'];
}
$sql = "INSERT INTO reservation(name,email,mobile,date,time,persons)VALUES('$name','$email','$mobile','$date','$time','$persons');";

  
  if(mysqli_query($con, $sql)){
    header("location:../reservation.php?username=$name");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
