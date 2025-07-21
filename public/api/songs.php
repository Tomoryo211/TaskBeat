<?php
header('Content-Type: application/json');

$host = 'localhost';
$db   = 'your_database_name';
$user = 'your_db_user';
$pass = 'your_db_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'DB接続エラー']);
    exit;
}

$stmt = $pdo->query("SELECT title FROM songs");
$songs = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($songs);
