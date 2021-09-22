<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$contact= $_POST['contact'];
}
$sql = "INSERT INTO contact_info(tittle,contact)VALUES('$tittle','$contact');";

  
  if(mysqli_query($con, $sql)){
    header("location:addcontact_info.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
