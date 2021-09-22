<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$link= $_POST['link'];
}
$sql = "INSERT INTO modal(tittle,link)VALUES('$tittle','$link');";

  
  if(mysqli_query($con, $sql)){
    header("location:addmodal.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
