<?php 
// login.php
include 'koneksi.php';
session_start();

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['Username']);
    $password = $_POST['Password'];

    // Cek apakah username ada di database
    $query = "SELECT * FROM registrasi WHERE Username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verifikasi password (menggunakan password_hash di register)
        if (password_verify($password, $row['Password'])) {
            // Jika benar, simpan session
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['FullName'] = $row['FullName'];
            
            echo "<script>
                alert('Login berhasil! Selamat datang, ". addslashes($row['FullName']) ."');
                window.location='dashboard.php';
            </script>";
            exit;
        } else {
            echo "<script>alert('Password salah!');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login | Germanzia.University</title>
    <link rel="stylesheet" href="designlogin.css">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <div class="logo">
                <img src="logogerman.jpeg" alt="Germanzia.University Logo">
                <span class="brand">GERMANZIA.UNIVERSITY</span>
            </div>
            <nav class="main-nav">
                <a href="landingpage.php" class="nav-link">Landing Page</a>
                <a href="about.php" class="nav-link active">About Us</a>
                <a href="login.php" class="btn btn-login">Login</a>
            </nav>
        </div>
    </header>

  <main class="auth-wrapper" role="main">
    <div class="auth-card">
        <h2>Login Akun</h2>
        <p class="lead">Masuk untuk melanjutkan ke halaman <strong>Beasiswa Germanzia University</strong>.</p>

        <form method="POST" class="auth-form" novalidate>
            <label class="input-label">Username
                <input type="text" name="Username" placeholder="Masukkan username" required>
            </label>

            <label class="input-label">Password
                <input type="password" name="Password" placeholder="Masukkan password" required>
            </label>

            <button type="submit" name="login" class="btn-primary">Login</button>
        </form>

        <p class="register-text">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </div>
  </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <div class="footer-left">&copy; 2025 germanzia.university — Dibuat oleh Venezia Evelyn Zefanya</div>
                <div class="footer-right social">
                    <a href="#" aria-label="Instagram">IG</a>
                    <a href="#" aria-label="Facebook">FB</a>
                    <a href="#" aria-label="LinkedIn">IN</a>
                </div>
            </div>
    </footer>


  <script>
  document.querySelectorAll('.nav-link').forEach(a =>  {
    a.addEventListener ('click', (e) => {
      document.querySelectorAll ('.nav-link').forEach (x => x.classList.remove('active'));
      e.target.classList.add ('active');
    });
   });
  </script>
</body>
</html>
