<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$about =$_POST['about'];
    echo$vedio =$_POST['vedio'];
}
$sql = "INSERT INTO about(tittle,about,vedio)VALUES('$tittle','$about','$vedio');";

  
  if(mysqli_query($con, $sql)){
    header("location:addabout.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
