<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM message WHERE  id = $id";

mysqli_query($con, $q);

header ('location:contactus_details.php');


?>