<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$item_no= $_POST['item_no'];
    echo$name= $_POST['name'];
    echo$link =$_POST['link'];
    echo$price =$_POST['price'];
    echo$about =$_POST['about'];

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "adminimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO drink(tittle,item_no,name,image,link,price,about)VALUES('$tittle','$item_no','$name','$image','$link','$price','$about');";

  
  if(mysqli_query($con, $sql)){
    header("location:adddrinks.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
