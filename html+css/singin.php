<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css2.css">

  </head>
  <body>
    <?php require 'usertable.php'; ?>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
<button type="button" class="toggle-btn" onclick="login()">تسجيل دخول</button>
<button type="button" class="toggle-btn" onclick="register()">تسجيل</button>
        </div>
<form action="html1.php"  id="login" class="input-group" method="post">
  <h2>تسجيل الدخول هنا</h2>
  <input type="text" class="input-field" name="user" placeholder="اسم المستخدم" required>
  <input type="password" class="input-field" name="password" placeholder=" ادخل كلمة المرور" required>
  <input type="checkbox" class="check-box"><span>تذكر كلمة المرور</span>
  <button type="submit" class="submit-btn">تسجيل دخول</button>
</form>
  <form action="register.php"  id="register" class="input-group" method="post">
    <h2>التسجيل هنا</h2>
    <input type="text" class="input-field" name="user" placeholder="اسم المستخدم" required>
    <input type="email" class="input-field" name="email" placeholder="ادخل الايميل" required>
    <input type="password" class="input-field" name="password" placeholder="ادخل كلمة المرور" required>

    <button type="submit" class="submit-btn">تسجيل</button>
</div>
</div>
</form>
</body>
</html>

<script>
var x = document.getElementById("login");
  var y = document.getElementById("register");
    var z = document.getElementById("btn");
    function register(){
      x.style.left="-400px";
      y.style.left="50px";
      z.style.left="110px";
    }
    function login(){
      x.style.left="50px";
      y.style.left="450px";
      z.style.left="0";
}

</script>
