<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$name= $_POST['name'];
    echo$src =$_POST['src'];
    echo$link =$_POST['link'];
}
$sql = "INSERT INTO location(name,src,link)VALUES('$name','$src','$link');";

  
  if(mysqli_query($con, $sql)){
    header("location:addlocation.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
