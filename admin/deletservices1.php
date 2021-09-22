<?php
error_reporting(0);
?>
<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM footer_services1 WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewservices1.php');


?>