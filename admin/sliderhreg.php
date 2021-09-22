<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$about =$_POST['about'];
    echo$name= $_POST['name'];
    echo$link =$_POST['link'];
    

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "adminimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO homeslider(tittle,image,about,name,link)VALUES('$tittle','$image','$about','$name','$link');";

  
  if(mysqli_query($con, $sql)){
    header("location:addsliderh.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
