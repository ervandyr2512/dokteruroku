<?php
// contact_us.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama    = $_POST['nama'] ?? '';
    $email   = $_POST['email'] ?? '';
    $telepon = $_POST['telepon'] ?? '';
    $pesan   = $_POST['pesan'] ?? '';

    if ($nama && $email && $pesan) {
        try {
            $stmt = $pdo->prepare("INSERT INTO kontak (nama, email, telepon, pesan) VALUES (?, ?, ?, ?)");
            $stmt->execute([$nama, $email, $telepon, $pesan]);

            $_SESSION['success'] = "Pesan Anda berhasil dikirim!";
        } catch (PDOException $e) {
            $_SESSION['error'] = "Gagal mengirim pesan: " . $e->getMessage();
        }
    } else {
        $_SESSION['error'] = "Semua field wajib diisi.";
    }

    header('Location: form.php'); 
    exit();
} else {
    header('Location: form.php');
    exit();
}
