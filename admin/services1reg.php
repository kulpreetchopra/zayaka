<?php
error_reporting();
?>
<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo $title= $_POST['title'];
    echo $service= $_POST['service'];
        
}
$sql = "INSERT INTO footer_services1(title,service)VALUES('$title','$service');";

  
  if(mysqli_query($con, $sql)){
     header("location:addservices1.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
