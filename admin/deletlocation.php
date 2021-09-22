<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM location WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewlocation.php');


?>