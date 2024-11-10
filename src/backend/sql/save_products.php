<?php
$host = '127.0.0.1';
$port = '3306'; // Adjust if your MySQL uses a different port
$dbname = 'ecommerce';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
