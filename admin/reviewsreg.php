<?php

include('dbcon.php');

  if(isset($_POST['submit'])){
    echo$username =$_POST['username'];
    echo$rate =$_POST['rate'];
    
    $sql = "INSERT INTO ratings(username,rate)VALUES('$username','$rate');";
}

  if(mysqli_query($con, $sql)){
    header("location:addreviews.php");
  }else{
    header("location:addreviews.php");
  }

?>
