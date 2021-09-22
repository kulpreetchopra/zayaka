<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$faq= $_POST['faq'];
}
$sql = "INSERT INTO faq(tittle,faq)VALUES('$tittle','$faq');";

  
  if(mysqli_query($con, $sql)){
    header("location:addfaq.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
