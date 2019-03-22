<?php
  session_start();

  if (empty($_SESSION['authenticated'])) {
    header("Location: /dashboard/");
  } else if ($_SESSION['authenticated'] == false) {
    header("Location: /dashboard/");
  } else if ($_SESSION['authenticated'] == true) {
    $show_content = true;
  } else {
    header("Location: /dashboard/");
  }
  if (empty($show_content)) {
    $show_content = false;
  }
