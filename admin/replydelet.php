<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM adminreply WHERE  message_id = $id";
$q1 = "DELETE FROM message WHERE  id = $id";

mysqli_query($con, $q);
mysqli_query($con, $q1);

header ('location:contactus_details.php');


?>