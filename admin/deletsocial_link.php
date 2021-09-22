<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM social_links WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewsocial_link.php');


?>