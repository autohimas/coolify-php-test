<?php
$host = '10.0.1.7';
$db   = 'app_db';
$user = 'app_user';
$pass = 'mylove';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (Exception $e) {
    die("DB Error: " . $e->getMessage());
}
