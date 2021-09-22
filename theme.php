<?php
include ('dbcon.php');

 $s = "select * from theme order by id desc"; 
 $s1 = mysqli_query($con, $s);
 $theme = mysqli_fetch_assoc($s1);
 ?>