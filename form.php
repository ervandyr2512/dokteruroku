<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DokterUroku.com - Hubungi Kami</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <?php include 'navigation.php'; ?>

    <main class="content">
      <h2>Hubungi Kami</h2>
      <?php if (isset($_SESSION['error'])): ?>
        <div class="error-message"><?= htmlspecialchars($_SESSION['error']) ?></div>
        <?php unset($_SESSION['error']); ?>
      <?php endif; ?>

      <?php if (isset($_SESSION['success'])): ?>
        <div class="success-message"><?= htmlspecialchars($_SESSION['success']) ?></div>
        <?php unset($_SESSION['success']); ?>
      <?php endif; ?>

      <section class="contact-details">
        <div class="form-section">
          <h3>Form Kontak</h3>
          <form class="contact-form" action="contact_us.php" method="POST">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" placeholder="Your Name" required>

            <label for="email">Email Aktif:</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required>

            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon" placeholder="Contoh: 08XX XXXX" required>

            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan kamu." required></textarea>

            <button type="submit">Kirim Pesan</button>
          </form>
        </div>

        <div class="info-section">
          <h3>Informasi Kontak</h3>
          <ul class="contact-info-list">
            <li>📧 <strong>Email:</strong> ervandy.rangganata1993@gmail.com</li>
            <li>📱 <strong>WhatsApp:</strong> <a href="https://wa.me/6289606265326" target="_blank">+62 896 0626 5326</a></li>
            <li>📷 <strong>Instagram:</strong> <a href="https://instagram.com/ervandy" target="_blank">@ervandy</a></li>
            <li>📍 <strong>Alamat:</strong><br>
              145A High Street, Acton, London W3 6LP
            </li>
          </ul>
        </div>
      </section>
    </main>
  </div>
 <?php include 'footer.php'; ?>
</body>
</html>
