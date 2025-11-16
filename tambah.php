<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
    $alasan = $_POST['alasan'];
    $negara = $_POST['negara'];
    $bidang = $_POST['bidang'];
    $harapan = $_POST['harapan'];
    $rencana = $_POST['rencana'];

    // Query sesuai tabel
    $query = "INSERT INTO survey_mahasiswa 
    (nama, email, tanggal, alasan_beasiswa, negara_tujuan, bidang_studi, harapan, rencana_setelah_lulus)
    VALUES 
    ('$nama', '$email', '$tanggal', '$alasan', '$negara', '$bidang', '$harapan', '$rencana')";

    mysqli_query($koneksi, $query);

    echo "<script>
            alert('Terima kasih! Jawaban Anda telah disimpan.');
            window.location='survey_tampil.php';
          </script>";
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Survey | Germanzia University</title>
    <link rel="stylesheet" href="designtambah1.css">
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

    <div class="container">
        <h1>Form Survey Germanzia 🇩🇪</h1>
        <form method="POST">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Tanggal Pengisian:</label>
            <input type="date" name="tanggal" required>

            <label>Mengapa Anda tertarik mengikuti Beasiswa Germanzia?</label>
            <textarea name="alasan" required></textarea>

            <label>Negara tujuan studi Anda:</label>
            <input type="text" name="negara" required>

            <label>Bidang studi yang ingin Anda ambil:</label>
            <input type="text" name="bidang" required>

            <label>Harapan Anda setelah mengikuti program ini:</label>
            <textarea name="harapan" required></textarea>

            <label>Rencana setelah lulus nanti:</label>
            <textarea name="rencana" required></textarea>

            <button type="submit" name="submit">Kirim Jawaban</button>
        </form>
    </div>

    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-left">&copy; 2025 germanzia.university — Dibuat oleh Venezia Evelyn Zefanya</div>
            <div class="footer-right social">
                <a href="#" aria-label="Instagram">IG</a>
                <a href="#" aria-label="Facebook">FB</a>
                <a href="#" aria-label="LinkedIn">IN</a>
            </div>
        </div>
    </footer>
</body>
</html>
