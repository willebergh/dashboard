<?php

  include_once "../inc/dbh.inc.php";

  $name = $_POST['project_name'];
  $features = $_POST['project_features'];
  $description = $_POST['project_description'];
  $lang = $_POST['project_lang'];
  $git_link = $_POST['project_git_link'];

  if (!isset($_POST)) {
    header("Location: /dashboard/?error=1");
    exit;
  }
  if (empty($name) || empty($features) || empty($description) || empty($lang) || empty($git_link)) {
    header("Location: /dashboard/?error=2");
  } else {
    $sql = "INSERT INTO projects (name, features, description, lang, git_link)
      VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: /dashboard/?error=3");
      exit;
    } else {
      mysqli_stmt_bind_param($stmt, "sssss", $name, $features, $description, $lang, $git_link);
      mysqli_stmt_execute($stmt);
      header("Location: /dashboard/?project=added");
    }
  }
