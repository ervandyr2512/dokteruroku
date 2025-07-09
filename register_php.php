<?php
// register.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama       = $_POST['nama_lengkap'] ?? '';
    $email      = $_POST['email'] ?? '';
    $tgl_lahir  = $_POST['tanggal_lahir'] ?? '';
    $hp         = $_POST['nomor_hp'] ?? '';
    $alamat     = $_POST['alamat'] ?? '';
    $password   = $_POST['password'] ?? '';

    if ($nama && $email && $tgl_lahir && $hp && $alamat && $password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (nama_lengkap, email, tanggal_lahir, nomor_hp, alamat, password) VALUES (?, ?, ?, ?, ?, ?)");
        try {
            $stmt->execute([$nama, $email, $tgl_lahir, $hp, $alamat, $hashed_password]);
            $_SESSION['success'] = "Registrasi berhasil. Silakan login.";
            header('Location: login.php');
            exit();
        } catch (PDOException $e) {
            $_SESSION['error'] = "Email sudah terdaftar.";
            header('Location: register.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "Semua field wajib diisi.";
        header('Location: register.php');
        exit();
    }
} else {
    header('Location: register.php');
    exit();
}
?>
