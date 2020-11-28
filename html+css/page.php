
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> اقتباسات الزوار </title>
    <link rel="stylesheet" href="style.css" type="text/css">


  </head>
  <body class= "background-image3">
    <div class="menu-area">
      <ul>
      <li><a class="active" href="html1.php">الرئيسية</a></li>
      <li><a href="html2.html">اضافة اقتباس </a></li>
      <li><a href="html3.html">أبيات</a><li>
      <li><a href="html4.html">حكم</a></li>
      <li><a href="html5.html">عبارات منوعة</a></li>
      <li><a href="page.php">اقتباسات الزوار</a></li>
      </ul>

    </div>
    <br><br><br>



    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'project')
    or die( mysqli_connect_error());
     //echo "Connected to MySQL<br/>";


    mysqli_query($conn,"CREATE TABLE IF NOT EXISTS phrases(
       id INT NOT NULL AUTO_INCREMENT,
       PRIMARY KEY(id),
       Title VARCHAR(20),
       Word VARCHAR(1000))")
     or die( mysqli_connect_error());
  //  echo "Table Created!"
  $a = 0;
// True because $a is set
if (isset($_POST['t1'])&&isset($_POST['t2'])) {
  $t1 =  $_POST['t1'];
  $t2 = $_POST['t2'] ;



    	$query = "INSERT INTO phrases (Title, Word) VALUES ('$t1', '$t2') ";
    	mysqli_query($conn,$query)
    or die( mysqli_connect_error());
}
     $result= mysqli_query($conn, "SELECT * FROM phrases") or die( mysqli_connect_error());
     while($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)){
     	echo "<h2>".$row['Title']."</h2>";
     	echo "<h5>".$row['Word']."</h5>";
    echo "<br />";
    }


     ?>


  </body>
</html>
