<?php 
include 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM survey_mahasiswa ORDER BY  tanggal ASC");
$no = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Survey Mahasiswa | Germanzia University</title>
    <link rel="stylesheet" href="designsurvey1.css">
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
        <a href="about.php" class="nav-link">About Us</a>
        <a href="login.php" class="btn-login">Login</a>
      </nav>
    </div>
</header>

<div class="container">
    <h1>📋 Hasil Survey Mahasiswa Germanzia</h1>

    <table class="survey-table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal</th>
            <th>Alasan Beasiswa</th>
            <th>Negara Tujuan</th>
            <th>Bidang Studi</th>
            <th>Harapan</th>
            <th>Rencana Setelah Lulus</th>
            <th>Aksi</th>
        </tr>

        <?php while($d = mysqli_fetch_array($data)){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['email']; ?></td>
            <td><?= date("d-m-Y", strtotime($d['tanggal'])); ?></td>
            <td><?= $d['alasan_beasiswa']; ?></td>
            <td><?= $d['negara_tujuan']; ?></td>
            <td><?= $d['bidang_studi']; ?></td>
            <td><?= $d['harapan']; ?></td>
            <td><?= $d['rencana_setelah_lulus']; ?></td>

            <td class="action">
                <a href="update.php?id=<?= $d['id']; ?>" class="btn-edit">EDIT</a><br>
                <a href="hapus.php?id=<?= $d['id']; ?>" class="btn-delete"
                   onclick="return confirm('Yakin ingin menghapus data ini?')"> DELETE</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <a href="tambah.php" class="btn-add">+ ISI SURVEY KEMBALI</a>
</div>

<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-left">&copy; 2025 germanzia.university — Dibuat oleh Venezia Evelyn Zefanya</div>
        <div class="footer-right social">
            <a href="#">IG</a>
            <a href="#">FB</a>
            <a href="#">IN</a>
        </div>
    </div>
</footer>

</body>
</html>
