<?php include("session.php");?>
<?php
session_start();
include ('dbcon.php');

if (isset($_POST['login']))
{
   echo$user = $_POST['username']; 
   echo$pwd =  $_POST['password']; 

  $query = "SELECT * FROM  user WHERE username = '$user' && password= '$pwd'";
  $data = mysqli_query($con, $query);
  echo$total =mysqli_num_rows($data);
  // $total;
if($total==1){

  echo  $_SESSION['username'] =$user;
   $_SESSION['password'] =$pwd;
  header("Location:../index.php?username=".$_SESSION['username']);

  }
  else{

 header('location:index.php');
  }

}

?>