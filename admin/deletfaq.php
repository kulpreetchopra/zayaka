<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM faq WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewfaq.php');


?>