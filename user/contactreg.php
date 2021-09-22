<?php include("session.php");?>
<?php
                  if(isset($_GET['username'])){
                      $name=$_GET['username'];
                  }
                  else{
                      $name="You Are Not Logged in ";
                  }
                  ?> 
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$name= $_POST['name'];
    echo$email= $_POST['email'];
    echo$mobile= $_POST['mobile'];
    echo$message= $_POST['message'];
}
$sql = "INSERT INTO message(name,email,mobile,message)VALUES('$name','$email','$mobile','$message');";

  
  if(mysqli_query($con, $sql)){
    header("location:../contact.php?username=$name");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
