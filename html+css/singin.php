<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css2.css">

  </head>
  <body>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
<button type="button" class="toggle-btn" onclick="login()">Log In</button>
<button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
<form action="loginn.php"  id="login" class="input-group" method="post">
  <h2>Login Here</h2>
  <input type="text" class="input-field" name="user" placeholder="Username" required>
  <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
  <input type="checkbox" class="check-box"><span>Remember Password</span>
  <button type="submit" class="submit-btn">LogIn</button>
</form>
  <form action="register.php"  id="register" class="input-group" method="post">
    <h2>Register Here</h2>
    <input type="text" class="input-field" name="user" placeholder="Username" required>
    <input type="email" class="input-field" name="email" placeholder="Enter Email" required>
    <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
    <input type="checkbox" class="check-box"><span>I agree to </span>
    <button type="submit" class="submit-btn">Register</button>
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
