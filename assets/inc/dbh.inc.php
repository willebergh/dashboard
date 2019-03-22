<?php
  $servername = "localhost";
  $username = "dashboard";
  $password = "JQASHY44MaLnivBN";
  $dbname = "dashboard";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
