<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM nonveg WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewnonveg.php');


?>