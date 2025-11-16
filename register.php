<?php 
include 'koneksi.php';

if (isset($_POST['register'])) {
    $fullname = $_POST['FullName'];
    $username = $_POST['Username'];
    $age = $_POST['Age'];
    $email = $_POST['Email'];
    $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO registrasi (FullName, Username, Age, Email, Password)
              VALUES ('$fullname', '$username', '$age', '$email', '$password')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='login.php';</script>";
    } else {
        echo "<script>alert('Gagal mendaftar! Periksa kembali input Anda.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Beasiswa | Germanzia University</title>
    <link rel="stylesheet" href="designregister.css">
</head>
<body>

<header class="site-header">
    <div class="nav-container">
        <div class="logo">
            <img src="logogerman.jpeg" alt="Germanzia Logo">
            <span class="brand">GERMANZIA.UNIVERSITY</span>
        </div>

        <nav class="main-nav">
            <a href="landingpage.php" class="nav-link">Landing Page</a>
            <a href="about.php" class="nav-link">About Us</a>
            <a href="login.php" class="btn-login">Login</a>
        </nav>
    </div>
</header>

<div class="header-space"></div>
<div class="register-container">
    <div class="form-box">
        <h2>Form Registrasi Beasiswa</h2>
        <p>Daftar sekarang untuk kesempatan studi di <b>Jerman</b> bersama <span>Germanzia University</span>.</p>
        <form method="POST">

                <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" name="FullName" placeholder="Enter your full name" required>
                </div>

                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="Username" placeholder="Enter your username" required>
                </div>

                <div class="input-group">
                    <label>Umur</label>
                    <input type="number" name="Age" placeholder="Enter your age" required>
                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="Email" placeholder="Enter your email" required>
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="Password" placeholder="Enter your password" required>
                </div>

            <button type="submit" name="register">Daftar Sekarang</button>
        </form>

        <p class="login-text">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>
</div>

<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-left">© 2025 germanzia.university — Dibuat oleh Venezia Evelyn Zefanya</div>
        <div class="footer-right">
            <a href="#">IG</a>
            <a href="#">FB</a>
            <a href="#">IN</a>
        </div>
    </div>
</footer>

</body>
</html>
