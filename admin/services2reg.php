<?php
error_reporting();
?>

<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo $title= $_POST['title'];
    echo $services= $_POST['services'];
        
}
$sql = "INSERT INTO footer_services2(title,services)VALUES('$title','$services');";

  
  if(mysqli_query($con, $sql)){
     header("location:addservices2.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
