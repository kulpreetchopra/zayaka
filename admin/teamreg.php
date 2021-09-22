<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$name= $_POST['name'];
    echo$about =$_POST['about'];
    echo$facebook =$_POST['facebook'];
    echo$instragram =$_POST['instragram'];
    echo$linkedin =$_POST['linkedin'];

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "adminimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO team(tittle,name,image,about,facebook,instragram,linkedin)VALUES('$tittle','$name','$image','$about','$facebook','$instragram','$linkedin');";

  
  if(mysqli_query($con, $sql)){
    header("location:addteam.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
