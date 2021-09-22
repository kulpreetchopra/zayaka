<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM snack WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewsnack.php');


?>