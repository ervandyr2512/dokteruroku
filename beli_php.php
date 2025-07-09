<?php
// beli.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'db_connection.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $paket = $_POST['paket'] ?? '';

    if ($paket === 'chat') {
        $harga = 100000;
    } elseif ($paket === 'video') {
        $harga = 200000;
    } else {
        $_SESSION['error'] = "Jenis paket tidak valid.";
        header('Location: marketplace.php');
        exit();
    }

    $stmt = $pdo->prepare("INSERT INTO orders (user_id, jenis_paket, harga) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $paket, $harga]);

    $_SESSION['success'] = "Pembelian paket $paket berhasil.";
    header('Location: marketplace.php');
    exit();

} else {
    header('Location: marketplace.php');
    exit();
}
?>
