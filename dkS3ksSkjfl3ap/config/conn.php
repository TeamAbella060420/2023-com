<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "789_2nd_db1";

try {
  $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Connection failed: " . $e->getMessage() . " in " . $e->getFile() . " on line " . $e->getLine());
}
