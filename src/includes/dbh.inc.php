<?php

$dsn = "mysql:host=localhost;dbname=my_database"; // Fixed DSN
$dbusername = "my_user";
$dbpassword = "my_password";

try {
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
