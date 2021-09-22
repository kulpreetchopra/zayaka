<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM lunch WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewlunch.php');


?>