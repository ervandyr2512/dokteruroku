<aside class="sidebar">
  <ul>
    <li><a href="index.php">Beranda</a></li>
    <li><a href="education.php">Riwayat Pendidikan</a></li>
    <li><a href="marketplace.php">Konsultasi</a></li>
    <li><a href="form.php">Hubungi Kami</a></li>        
    <li><a href="https://www.linkedin.com/in/ervandy-rangganata/?locale=in_ID">LinkedIn</a></li>

    <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1): ?>
      <li><a href="order.php">Data Pesanan</a></li>
    <?php endif; ?>
  </ul>
</aside>
