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
  <h2>تسجيل الدخول </h2>
  <input type="text" class="input-field" name="user" placeholder="اسم المستخدم" required>
  <input type="password" class="input-field" name="password" placeholder=" ادخل كلمة المرور" required>
  <input type="checkbox" class="check-box"><span>تذكر كلمة المرور</span>
  <button type="submit" class="submit-btn">تسجيل دخول</button>
</form>
  <form action="register.php"  class="input-group" method="post">
    <h2>التسجيل </h2>
    <input type="text" class="input-field" name="user" placeholder="اسم المستخدم" required>
    <input type="email" class="input-field" name="email" placeholder="ادخل الايميل" required>
    <input type="password" class="input-field" name="password" placeholder="ادخل كلمة المرور" required>

    <button type="submit" class="submit-btn">تسجيل</button>
    </form>
</div>
</div>

<script src="JS2.js"> </script>
</body>
</html>
