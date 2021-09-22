<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$name= $_POST['name'];
    echo$link= $_POST['link'];
    echo$active= $_POST['active'];
    echo$icon= $_POST['icon'];

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "adminimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO navbar(image,name,link,active,icon)VALUES('$image','$name','$link','$active','$icon');";

  
  if(mysqli_query($con, $sql)){
    header("location:addnavbar.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>