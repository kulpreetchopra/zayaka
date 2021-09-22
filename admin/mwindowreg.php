<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $link =$_POST['link'];
    

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "adminimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO menuwindow(name,image,link)VALUES('$name','$image','$link');";

  
  if(mysqli_query($con, $sql)){
    header("location:addmwindow.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
