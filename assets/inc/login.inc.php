<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard Login</title>
    <link rel="stylesheet" href="/dashboard/assets/css/reset.css">
    <link rel="stylesheet" href="/dashboard/assets/css/login.css">
  </head>
  <body>
    <div class="form_container">
      <p>Welcome to the Dashboard</p>
      <p>Please enter username and password</p>
      <form class="login_form" action="/dashboard/assets/script/login.script.php" method="post">
        <input class="login_input" type="text" name="login_username" placeholder="Username">
        <input class="login_input" type="password" name="login_password" placeholder="Password">
        <button class="login_button" type="submit" name="login_button">Login</button>
      </form>
    </div>
  </body>
</html>
