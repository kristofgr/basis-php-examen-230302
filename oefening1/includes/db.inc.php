<?php
$db_host = 'db';
$db_user = 'username';
$db_password = 'password';
$db_db = 'syntrafs';
$db_port = 3306;

try {
  $pdo = new PDO('mysql:host=' . $db_host . '; port=' . $db_port . '; dbname=' . $db_db, $db_user, $db_password);
} catch (PDOException $e) {
  echo "Error!: " . $e->getMessage() . "<br/>";
  die();
}
