<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$name= $_POST['name'];
    

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "adminimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO orderbanner(name,image,tittle)VALUES('$name','$image','$tittle');";

  
  if(mysqli_query($con, $sql)){
    header("location:addobanner.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
