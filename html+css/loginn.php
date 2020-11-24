<?php
$con = mysqli_connect("localhost","root","","project")
or die(mysqli_connect_error());
//echo "connect";
mysqli_select_db($con,"user_info");
//echo "connect to table";
if (isset($_POST['user'])&&isset($_POST['password'])) {
  $uname2=$_POST['user'];
  $pass2=$_POST['password'];
  $result="SELECT * FROM user_info where user='$uname2' and password = '$pass2'";

  if (mysqli_num_rows(mysqli_query($con,$result)) > 0 ) {
   $_SESSION['user']=$uname2;

    header("Location:html1.php");

  }
  else {
    echo "اسم المستخدم او كلمة السر خطأ";
  }
}
 ?>
