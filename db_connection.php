<?php
// db.php

$host = '127.0.0.1';
$port = '3305'; // Ubah sesuai dengan port MySQL Anda
$db   = 'konsultasi_web';
$user = 'root';
$pass = 'rootpassword'; // Ubah jika password root Anda berbeda
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
