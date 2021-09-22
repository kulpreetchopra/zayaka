<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$name= $_POST['name'];
    echo$link =$_POST['link'];
    

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "adminimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO homewindow(tittle,name,image,link)VALUES('$tittle','$name','$image','$link');";

  
  if(mysqli_query($con, $sql)){
    header("location:addhwindow.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
