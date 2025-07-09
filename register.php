<?php
// register.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Jika user sudah login, redirect ke marketplace
if (isset($_SESSION['user_id'])) {
    header('Location: marketplace.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DokterUroku.com - Register</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <?php include 'navigation.php'; ?>

    <main class="content">
      <h2>Form Registrasi</h2>
      <?php if (isset($_SESSION['success'])): ?>
        <div class="success-message" style="color: green; margin-bottom: 10px;">
          <?= htmlspecialchars($_SESSION['success']) ?>
        </div>
        <?php unset($_SESSION['success']); ?>
      <?php endif; ?>
      
        <?php if (isset($_SESSION['error'])): ?>
        <div class="error-message" style="color: red; margin-bottom: 10px;">
        <?= htmlspecialchars($_SESSION['error']) ?>
        </div>
        <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

      <form action="register_php.php" method="POST" class="contact-form">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama lengkap" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@gmail.com" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>

        <label for="nomor_hp">Nomor HP:</label>
        <input type="text" id="nomor_hp" name="nomor_hp" placeholder="08XX XXXX" required><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" placeholder="Tulis alamat Anda..." required></textarea><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password" required><br>

        <button type="submit">Daftar</button>
      </form>
      <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </main>
  </div>
 <?php include 'footer.php'; ?>
</body>
</html>
