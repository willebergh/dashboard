<?php
  include_once "../inc/dbh.inc.php";

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password_repeat = mysqli_real_escape_string($conn, $_POST['password_repeat']);

  if (empty($username) || empty($email) || empty($password) || empty($password_repeat)) {
    header("Location: $signup_PageURL?error=noInput");
    exit;
  } else {

    // Checks if username is taken or not
    $sql_check_username = "SELECT * FROM users WHERE username = ?";
    $stmt_check_username = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt_check_username, $sql_check_username)) {
      header("Location: $signup_PageURL");
      exit;
    } else {
      mysqli_stmt_bind_param($stmt_check_username, "s", $username);
      mysqli_stmt_execute($stmt_check_username);
      $result_check_username = mysqli_stmt_get_result($stmt_check_username);
      $row_check_username = mysqli_fetch_assoc($result_check_username);
      if ($username == $row_check_username['username']) {
        $check_username = "taken";
      } else {
        $check_username = "ok";
      }
    }


      if ($password == $password_repeat) {
        if ($hashed_password = password_hash($password, PASSWORD_DEFAULT)) {
          $check_password = "ok";
        } else {
          $check_password = "hash_error";
        }
      } else {
        $check_password = "no_match";
      }

      if ($check_username == "ok" && $check_password == "ok") {
        $sql = "INSERT INTO users (username, email, password)
          VALUES (?, ?)
        ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: $signup_PageURL");
          exit;
        } else {
          mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);
          mysqli_stmt_execute($stmt);

          session_start();
          $_SESSION['authenticated'] = true;
          $_SESSION['username'] = $username;

          header("Location: $home_PageURL?signup=success");
        }
      } else {
        header("Location: $signup_PageURL?username=$check_username&email=$check_email&password=$check_password");
      }
    }
