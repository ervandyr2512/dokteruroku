<?php
// order.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'db_connection.php';

// Redirect jika belum login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
if ($_SESSION['user_id']!=1) {
header('Location: marketplace.php');
    exit();
}
// Ambil pesanan user dari database
$stmt = $pdo->query("
  SELECT 
    orders.*, 
    users.nama_lengkap, 
    users.email,
    users.nomor_hp
  FROM orders
  JOIN users ON orders.user_id = users.id
  ORDER BY orders.created_at DESC
");
$orders = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DokterUroku.com - Riwayat Konsultasi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <?php include 'navigation.php'; ?>

    <main class="content">
      <h2>Riwayat Pemesanan Konsultasi</h2>

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

      <?php if (count($orders) > 0): ?>
        <table class="order-table">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Jenis Paket</th>
                <th>Harga</th>
                <th>Durasi</th>
                <th>Tanggal Pemesanan</th>
            </tr>
        </thead>

          <tbody>
                <?php foreach ($orders as $index => $order): ?>
                    <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($order['nama_lengkap']) ?></td>
                    <td><?= htmlspecialchars($order['email']) ?></td>
                    <td><?= htmlspecialchars($order['nomor_hp']) ?></td>
                    <td><?= ucfirst($order['jenis_paket']) ?></td>
                    <td>Rp <?= number_format($order['harga'], 0, ',', '.') ?></td>
                    <td><?= $order['durasi_menit'] ?> menit</td>
                    <td><?= date('d-m-Y H:i', strtotime($order['created_at'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <?php else: ?>
        <p>Belum ada pesanan konsultasi.</p>
      <?php endif; ?>
    </main>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
