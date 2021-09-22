<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM sub_footer WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewsubfooter.php');


?>