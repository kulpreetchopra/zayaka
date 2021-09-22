<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$about= $_POST['about'];
    echo$name= $_POST['name'];
    echo$service= $_POST['service'];
}
$sql = "INSERT INTO services(tittle,about,name,service)VALUES('$tittle','$about','$name','$service');";

  
  if(mysqli_query($con, $sql)){
    header("location:addservices.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
