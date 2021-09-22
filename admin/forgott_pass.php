<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['update'])){

    echo$user =$_POST['user'];
    echo$email =$_POST['email'];

}
$sql = "UPDATE admin SET forgott_pass='red' WHERE username='$user' or email='$email'";
  
  if(mysqli_query($con, $sql)){
    header("location:index.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
