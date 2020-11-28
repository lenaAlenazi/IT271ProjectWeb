<?php

$con = mysqli_connect('localhost', 'root', '', 'project')
or die( mysqli_connect_error());
 //echo "Connected to MySQL<br/>";

mysqli_select_db($con,"user_info");

if (isset($_POST['user'])&&isset($_POST['email'])&&isset($_POST['password'])) {

  $uname = $_POST['user'];
  $emaill = $_POST['email'];
  $pass = $_POST['password'];

  $qu = "INSERT INTO user_info (user,email,password) VALUES ('$uname','$emaill','$pass')";

   mysqli_query($con,$qu)
   or die( mysqli_connect_error());
    echo "تم انشاء الحساب بنجاح ";
}

 ?>
