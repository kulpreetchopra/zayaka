<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$bar= $_POST['bar'];
    echo$social_title= $_POST['social_title'];
    echo$contact_title= $_POST['contact_title'];
    echo$contact_no =$_POST['contact_no'];
    echo$opening_hr=$_POST['opening_hr'];
    
}
$sql = "INSERT INTO sub_footer(bar,social_title,contact_title,contact_no,opening_hr
)VALUES('$bar','$social_title','$contact_title','$contact_no','$opening_hr')";

  
  if(mysqli_query($con, $sql)){
    header("location:addsubfooter.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>