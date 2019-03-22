<?php

  if (!empty($_GET)) {
    $username_error = $_GET['username'];
    $email_error = $_GET['email'];
    $password_error = $_GET['password'];
  } else {
    $username_error = "";
    $email_error = "";
    $password_error = "";
  }
?>

<div class="formContainer">
  <h1>Sign up</h1>
  <form class="form" action="../assets/script/signup.script.php" method="post">
    <div class="form_username">
      <label for="username">Username</label>
      <?php if ($username_error == "taken") {echo "<p>username already registered</p>";} ?>
      <input type="text" name="username" required="required" placeholder="username">
    </div>
    <div class="form_email">
      <label for="email">E-mail</label>
      <?php if ($email_error == "taken") {echo "<p>email already registered</p>";} ?>
      <input type="text" name="email" required="required" placeholder="e-mail">
    </div>
    <div class="form_password">
      <label for="passowrd">Password</label>
      <?php if ($password_error == "no_match") {echo "<p>passwords didn't match</p>";}
        else if ($password_error == "hash_error") {echo "<p>something went wrong, please try again</p>";} ?>
      <input type="password" name="password" required="required" placeholder="password">
      <input type="password" name="password_repeat" required="required" placeholder="repeat password">
    </div>
    <div class="form_button">
      <button type="submit" name="signup_button">Signup</button>
    </div>
  </form>
</div>

<?php
  include_once($footerINC);
?>
