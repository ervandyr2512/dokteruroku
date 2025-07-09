# DokterUroku.com

**DokterUroku.com** adalah platform konsultasi medis daring berbasis web, dibuat menggunakan **PHP + MySQL**. Situs ini memungkinkan pengguna untuk mendaftar, login, membeli paket konsultasi (chat/video), dan bagi admin untuk melihat riwayat pemesanan.

## 🚀 Fitur Utama

- 🔐 Autentikasi Pengguna (Registrasi, Login, Logout)
- 📦 Marketplace Konsultasi (Paket Chat & Video)
- 💳 Proses Pembelian Paket
- 🧾 Riwayat Pemesanan (untuk admin)
- 📬 Formulir Kontak
- 🎨 Tampilan responsif dan terstruktur dengan HTML + CSS

## 🗂 Struktur Folder

```
.
├── assets/               # Gambar & aset statis
├── db_connection.php     # Koneksi ke database (PDO)
├── header.php            # Header global
├── navigation.php        # Sidebar navigasi
├── index.php             # Halaman utama
├── register.php          # Form registrasi
├── login.php             # Form login
├── logout.php            # Logout handler
├── register_php.php      # Proses registrasi
├── login_php.php         # Proses login
├── marketplace.php       # Halaman pembelian paket
├── beli_php.php          # Proses beli paket
├── order.php             # Riwayat pemesanan (admin only)
├── form.php              # Halaman kontak
├── contact_us.php        # Proses kirim kontak
└── style.css             # CSS utama
```

## ⚙️ Instalasi Lokal

1. Pastikan Anda memiliki **MAMP / XAMPP / LAMP** terinstal.
2. Clone project ini ke folder `htdocs` atau direktori server lokal Anda.
3. Import file SQL jika ada, atau jalankan manual:
   ```sql
   CREATE DATABASE konsultasi_web;
   ```
   Lalu buat tabel: `users`, `orders`, `kontak`.
4. Sesuaikan koneksi database di `db_connection.php`.

## 👤 Default Akun Admin

Untuk mengakses halaman admin (`order.php`), login sebagai user dengan ID = 1.

## 📌 Catatan Keamanan

- Password disimpan menggunakan `password_hash()`.
- Validasi form dasar sudah diterapkan, namun **perlu validasi tambahan untuk produksi**.

## 📧 Kontak

Dr. Ervandy Rangganata  
📧 ervandy.rangganata1993@gmail.com  
🌐 [LinkedIn](https://www.linkedin.com/in/ervandy-rangganata/?locale=in_ID)
