  <?php
  include_once "../inc/dbh.inc.php";

  $username = mysqli_real_escape_string($conn, $_POST['login_username']);
  $password = mysqli_real_escape_string($conn, $_POST['login_password']);

  if (empty($username) || empty($password)) {
    header("Location: /dashboard/?error=noInput");
    exit;
  } else {
    $sql = "SELECT username, password FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: /dashboard/?error=sql_error");
    } else {

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {

        $password_check = password_verify($password, $row['password']);
        if ($password_check == false) {
          header("Location: /dashboard/?error=1");
          exit;

        } else if ($password_check == true) {

          session_start();

          $_SESSION['username'] = $username;
          $_SESSION['authenticated'] = true;

          header("Location: /dashboard/");
          exit;

        } else {

          header("Location: /dashboard/?error=2");

        }
      }
    }
  }
