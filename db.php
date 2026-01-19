<?php
$host = '127.0.0.1';
$db   = 'app_db';
$user = 'root';
$pass = 'mylove';
$port = 3307;

try {
    $pdo = new PDO(
  "mysql:host=$host;port=$port;dbname=app_db;charset=utf8mb4",
  'myuser',
  'mypass'
);
} catch (Exception $e) {
    die("DB Error: " . $e->getMessage());
}
