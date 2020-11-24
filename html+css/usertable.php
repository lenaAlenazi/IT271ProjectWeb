<?php
$con = mysqli_connect("localhost","root","","project")
or die(mysqli_connect_error());

mysqli_query($con,"CREATE TABLE IF NOT EXISTS user_info(
  p_ID INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (p_ID),
  user VARCHAR(30),
  email VARCHAR(40),
 password VARCHAR(30))")
 or die(mysqli_connect_error());
 echo "Table Created!";
 ?>
