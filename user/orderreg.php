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
    echo$address= $_POST['address'];
    echo$oname= $_POST['oname'];
    echo$onumber= $_POST['onumber'];
    echo$oqty= $_POST['oqty'];
    echo$oprice= $_POST['oprice'];
}
$sql = "INSERT INTO order_details(name,email,mobile,address,oname,onumber,oqty,oprice)VALUES('$name','$email','$mobile','$address','$oname','$onumber','$oqty','$oprice');";

  
  if(mysqli_query($con, $sql)){
    header("location:../ordernow.php?username=$name");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
