<?php
  include_once "./assets/inc/dbh.inc.php";
  if (!empty($_GET)) {
    $username_error = $_GET['username'];
    $password_error = $_GET['password'];
  } else {
    $username_error = "";
    $password_error = "";
  }
?>

<div class="formContainer">
  <h1>Sign up</h1>
  <form class="form" action="./assets/script/signup.script.php" method="post">
      <?php if ($username_error == "taken") {echo "<p>username already registered</p>";} ?>
      <input type="text" name="username" required="required" placeholder="username">
      <?php if ($password_error == "no_match") {echo "<p>passwords didn't match</p>";}
        else if ($password_error == "hash_error") {echo "<p>something went wrong, please try again</p>";} ?>
      <input type="password" name="password" required="required" placeholder="password">
      <input type="password" name="password_repeat" required="required" placeholder="repeat password">
      <button type="submit" name="signup_button">Signup</button>
  </form>
</div>
