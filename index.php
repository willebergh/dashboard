<?php
  session_start();

  if (empty($_SESSION['authenticated'])) {
    include_once "./assets/inc/login.inc.php";
  } else if ($_SESSION['authenticated'] == false) {
    include_once "./assets/inc/login.inc.php";
  } else if ($_SESSION['authenticated'] == true) {
    echo "logged in";
  } else {
    include_once "./assets/inc/login.inc.php";
  }
