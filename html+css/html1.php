<!DOCTYPE html>

<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>الرئيسية</title>
<link rel="stylesheet" href="style.css" type="text/css">
<img id= "logo" src="image1.jpeg" alt="شعار الموقع">

  </head>
  <body>

    <div class="header">
    <h1>أهلاً بك في موقع اقتباسات</h1>
     </div>

    <div class="menu-area">
      <ul>
      <li><a class="active" href="html1.php">الرئيسية</a></li>
      <li><a href="html2.html">اضافة اقتباس </a></li>
      <li><a href="html3.html">أبيات</a><li>
      <li><a href="html4.html">حكم</a></li>
      <li><a href="html5.html">عبارات منوعة</a></li>
      <li><a href="page.php">اقتباسات الزوار</a></li>
      </ul>
        <form action="http://www.google.com/search">
            <input type="text" id="search" placeholder="البحث" name="search">
              </form>

    </div>
    <br><br><br>
    <center>
    <div class="main">

      <h1>معنى اقتباس</h1>
       <p>اقتباس الأفكار أو المعلومات مصطلح دارج في عالم الكتابة والتأليف حيث ظهر فن الكتابة من أجل تدوين الأفكار والمعلومات للاحتفاظ بها وتأريخ كل ما يمر علينا في حياتنا </p>
    </div>
    </center>
    <?php
    $con = mysqli_connect("localhost","root","","project")
    or die(mysqli_connect_error());
    //echo "connect";
    mysqli_select_db($con,"user_info");
    //echo "connect to table";

      $q="SELECT * FROM user_info";

      $result=mysqli_query($con,$q) or die( mysqli_connect_error());;
      echo "<br/>";echo "<br/>";echo "<br/>";
    echo "<center>"."<h2>أسماء زوار الموقع</h2>"."</center>";
    while($r=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "<center>".$r['user']."</center>";
    echo "<br/>";
    }
     ?>


  </body>
</html>
