<?php
// login.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email && $password) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nama'] = $user['nama_lengkap'];
            header('Location: marketplace.php');
            exit();
        } else {
            $_SESSION['error'] = "Email atau password salah.";
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "Silakan isi semua field.";
        header('Location: login.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
?>
