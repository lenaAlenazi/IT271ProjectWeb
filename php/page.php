<?php

include 'db.php';

//if ($_POST['submit'] === 'POST' && isset($_POST['submit'])) {
   $t1 = isset($_POST['t1']) ? $_POST['t1'] : '';
   $t2 = isset($_POST['t2']) ? $_POST['t2'] : '';
   echo'<h3> "Title: " <h3>';
   echo"$t1";

echo  "$t2" ;
//
//}
;
 ?>
