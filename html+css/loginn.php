<?php require 'usertable.php';
if (isset($_POST['login'])) {
  $uname=$_POST['user'];
  $pass=$_POST['password'];
  $qu="SELECT * FROM user_info where user = '$uname' && PASS = '$pass'";

  if (mysqli_num_rows(mysqli_query($con,$qu)) > 0 ) {
    $_SESSION['user']=$uname;
    header("Location: project.php");

  }
  else {
    echo "اسم المستخدم او كلمة السر خطأ";
  }
}
 ?>
