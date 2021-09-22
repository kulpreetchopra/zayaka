<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM admin WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewprofile.php');


?>