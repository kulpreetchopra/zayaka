<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM order_details WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:order_details.php');


?>