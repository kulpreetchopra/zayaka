<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM homespecial WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewhspecial.php');


?>