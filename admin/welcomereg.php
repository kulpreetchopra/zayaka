<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$description =$_POST['description'];
    
    $filename1 = $_FILES['welimage'] ['name'];
    $tempname1 = $_FILES['welimage'] ['tmp_name'];

    $welimage = "adminimage/" .$filename1;

    move_uploaded_file($tempname1, $welimage);
    echo "<img src='$welimage' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO welcome(tittle,description,welimage)VALUES('$tittle','$description','$welimage');";

  
  if(mysqli_query($con, $sql)){
    header("location:addwelcome.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
