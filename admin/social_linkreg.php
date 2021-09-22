<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){
    
    echo$wicon= $_POST['wicon'];
    echo$whatsaap= $_POST['whatsaap'];
    echo$licon= $_POST['licon'];
    echo$linkedin= $_POST['linkedin'];
    echo$ficon= $_POST['ficon'];
    echo$facebook= $_POST['facebook'];
    echo$ticon= $_POST['ticon'];
    echo$twitter=$_POST['twitter'];
    echo$iicon= $_POST['iicon'];
    echo$instagram =$_POST['instagram'];
       
}
$sql = "INSERT INTO social_links(wicon,whatsaap,licon,linkedin,ficon,facebook,ticon,twitter,iicon,instagram)VALUES('$wicon','$whatsaap','$licon','$linkedin','$ficon','$facebook','$ticon','$twitter','$iicon','$instagram')";

  
  if(mysqli_query($con, $sql)){
    header("location:addsocial_link.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>