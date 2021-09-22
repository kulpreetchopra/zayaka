<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$title= $_POST['title'];
    echo$image= $_POST['image'];
    echo$about= $_POST['about'];
    echo$button_name =$_POST['button_name'];
    echo$button_link=$_POST['button_link'];
    echo$copyright =$_POST['copyright'];

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "adminimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO main_footer(title,image,about,button_name,button_link,copyright)VALUES('$title','$image','$about','$button_name','$button_link','$copyright');";

  
  if(mysqli_query($con, $sql)){
    header("location:addmainfooter.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>