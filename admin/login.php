<?php include("session.php");?>
<?php
session_start();
include ('dbcon.php');

if (isset($_POST['login']))
{
   $user = $_POST['username']; 
   $pwd =  $_POST['password']; 

  $query = "SELECT * FROM  admin WHERE username = '$user' && password= '$pwd'";
  $data = mysqli_query($con, $query);
  $total =mysqli_num_rows($data);
  // $total;
if($total==1){

   $_SESSION['username'] =$user;
   $_SESSION['password'] =$pwd;
   $_SESSION['name'] =$name;
   header('location:dashboard.php');

  }
  else{

  header('location:index.php');
  }

}

?>