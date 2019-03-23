<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/dashboard/assets/css/reset.css">
    <link rel="stylesheet" href="/dashboard/assets/css/main.css">
    <link rel="stylesheet" href="/dashboard/assets/css/header.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="/dashboard/assets/js/main.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="logo">
        <h1 class="logo_item">Dashboard</h1>
      </div>
      <div class="nav_button">
        <a class="nav_button_item" href="javascript:void(0)" id="nav_button" onclick="openDropdown()">
          <?php echo $_SESSION['username']; ?>
          <span class="nav_button_item fas fa-angle-down"></span>
        </a>
      </div>
    </header>
    <div class="nav_dropdown" id="nav_dropdown">
      <div class="nav_item">
        <p>Current user:</p>
        <p><?php echo $_SESSION['username'] ?></p>
      </div>
      <div class="nav_item">
        <a href="#">
          <span class="nav_item_icon fas fa-cog"></span>
          <span class="nav_item_text">Settings</span>
        </a>
      </div>
      <div class="nav_item">
        <a href="/dashboard/assets/script/logout.script.php">
          <span class="nav_item_icon fas fa-sign-out-alt"></span>
          <span class="nav_item_text">Logout</span>
        </a>
      </div>
    </div>
