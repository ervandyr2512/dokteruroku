<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DokterUroku.com - Konsultasi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container">
      <?php include 'navigation.php'; ?>

    <main class="content">
      <h3>Paket Konsultasi</h3>
      <?php if (isset($_SESSION['error'])): ?>
        <div class="error-message" style="color: red; margin-bottom: 10px;">
          <?= htmlspecialchars($_SESSION['error']) ?>
        </div>
        <?php unset($_SESSION['error']); ?>
      <?php endif; ?>

      <?php if (isset($_SESSION['success'])): ?>
        <div class="success-message" style="color: green; margin-bottom: 10px;">
          <?= htmlspecialchars($_SESSION['success']) ?>
        </div>
        <?php unset($_SESSION['success']); ?>
      <?php endif; ?>

      <div class="gallery-grid">
        <form action="beli_php.php" method="POST">
          <div class="gallery-item">
          <h3>Konsultasi Chat</h3>
          <img src="assets/KonsultasiChat.jpeg" alt="Konsultasi Chat">
          <p>Rp 100.000/30 menit</p>
          <input type="hidden" name="paket" value="chat">
          <button type="submit" class="button-link"><span class="tag">Beli Sekarang</span></button>
        </form>
        </div>
      </div>

      <div class="gallery-grid">
        <form action="beli_php.php" method="POST">
          <div class="gallery-item">
            <h3>Konsultasi Video</h3>
            <img src="assets/KonsultasiVideo.jpg" alt="Konsultasi Video">
            <p>Rp 200.000/30 menit</p>
            <input type="hidden" name="paket" value="video">
            <button type="submit" class="button-link"><span class="tag">Beli Sekarang</span></button>
          </div>
        </form>
        </div>
      </div>
    </main>
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>
