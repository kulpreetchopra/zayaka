<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$name= $_POST['name'];
    echo$message_id= $_POST['message_id'];
    echo$reply= $_POST['reply'];
    echo$admin= $_POST['admin'];
     
}
$sql = "INSERT INTO adminreply(name,message_id,reply,admin)VALUES('$name','$message_id','$reply','$admin');";

  
  if(mysqli_query($con, $sql)){
    header("location:contactus_details.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
