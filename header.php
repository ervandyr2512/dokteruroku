<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // pastikan ini ada di awal file header.php
?>

<header>
  <div>
    <h1>DokterUroku.com</h1>
    <p class="tagline">Medical Doctor, Researcher, Medical Technologist</p>
  </div>

  <div class="auth-buttons">
    <?php if (isset($_SESSION['user_id'])): ?>
      <a href="logout_php.php" class="button-link"><span class="tag">Logout</span></a>
    <?php else: ?>
      <a href="login.php" class="button-link"><span class="tag">Login</span></a>
      <a href="register.php" class="button-link"><span class="tag">Register</span></a>
    <?php endif; ?>
  </div>
</header>
