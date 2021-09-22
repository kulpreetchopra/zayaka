<?php

include('dbcon.php');

  if(isset($_POST['submit'])){
    echo$username =$_POST['username'];
    echo$rate =$_POST['rate'];
    if($_POST['username']=="You Are Not Logged in ") {
    	echo$sql = "INSERT INTO zaya(username,rate)VALUES('$username','$rate');";
    }
    else if($_POST['username']=="You Are Not Logged in") {
      echo$sql = "INSERT INTO zaya(username,rate)VALUES('$username','$rate');";
    }
    else{
      echo$sql = "INSERT INTO ratings(username,rate)VALUES('$username','$rate');";
    }
}

  if(mysqli_query($con, $sql)){
    header("location:index.php?username=$username");
  }
  else{
    header("location:index.php?username=$username");
  }

?>
