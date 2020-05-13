<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
         <link rel="stylesheet" href="fontawesome-free-5.12.1-web/fontawesome-free-5.12.1-web/css/all.css">
  </head>
  <body>
    <div class="box">
      <form action="login_backend.php" method="POST">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="email" placeholder="Username" id="username" name="username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" id="paassword" name="password">
  </div>

  <input type="submit" class="btn" value="Sign in">
</div>
</form>
</div>
  </body>
</html>
