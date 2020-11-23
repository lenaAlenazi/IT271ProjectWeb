<?php


if (isset($_POST['register'])) {

  $uname = $_POST['user'];
  $emaill = $_POST['email'];
  $pass = $_POST['password'];
  $qu = "INSERT INTO user_info (user,email,password) VALUES ('$uname','$emaill','$pass')";
  if (mysqli_query($con,$qu)) {
    echo "تم انشاء الحساب بنجاح ";
  }
}
 ?>
