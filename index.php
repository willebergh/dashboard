<?php
  session_start();

  if (empty($_SESSION['authenticated'])) {
    include_once "./assets/inc/login.inc.php";
  } else if ($_SESSION['authenticated'] == false) {
    include_once "./assets/inc/login.inc.php";
  } else if ($_SESSION['authenticated'] == true) {
    $show_content = true;
  } else {
    include_once "./assets/inc/login.inc.php";
  }
  if (empty($show_content)) {
    $show_content = false;
  }

  if ($show_content == true) {
    include_once "./assets/inc/header.inc.php";
    echo "<main>";
      include_once "./assets/inc/project_adder.inc.php";
    echo "</main>";
    include_once "./assets/inc/footer.inc.php";
  }
