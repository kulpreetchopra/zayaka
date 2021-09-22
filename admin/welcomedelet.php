<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM welcome WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewwelcome.php');


?>