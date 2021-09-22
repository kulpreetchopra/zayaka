<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$name= $_POST['name'];
    echo$email= $_POST['email'];
    echo$mobile= $_POST['mobile'];
    echo$address= $_POST['address'];
    echo$gender= $_POST['gender'];
    echo$username =$_POST['username'];
    echo$password =$_POST['password'];
    echo$about =$_POST['about'];
    echo$admin =$_POST['admin'];

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "adminimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO admin(name,email,mobile,address,gender,username,password,forgott_pass,image,about,admin)VALUES('$name','$email','$mobile','$address','$gender','$username','$password','green','$image','$about','$admin');";

  
  if(mysqli_query($con, $sql)){
    $_SESSION['succes']="Data Submitted Successfully!!";
    header("location:adminprofile.php");
  }else{
    $_SESSION['error']="Data Submitted Unsuccessfully!!";
    header("location:adminprofile.php");
    // echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
