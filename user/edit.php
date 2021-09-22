<?php include("session.php");?>
<?php

       include ('dbcon.php');
       $user=$_SESSION['username'];
       $q = "SELECT * FROM `user` WHERE  `username`='$user'";
       $query = mysqli_query($con, $q);
       $result = mysqli_fetch_array($query);
    //    echo $result['image'];
       
  ?>
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
    echo$interest =$_POST['interest'];

   $q ="UPDATE user SET name='$name',email='$email',mobile='$mobile',address='$address',gender='$gender',username='$username',password='$password',interest='$interest' WHERE `username`='$user'";

   $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
    if($fire) header("Location:dashboard.php");
}
?>