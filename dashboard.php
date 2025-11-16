<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Germanzia University</title>
    <link rel="stylesheet" href="designdashboard.css">
</head>

<body>
    <div class="container">
        <h2>Selamat datang, <span><?php echo $_SESSION['FullName']; ?></span>!</h2>
        <p>Anda berhasil login ke sistem beasiswa Germanzia University.</p>
        <p>Silakan klik pengisian survey di bawah ini!</p>

        <div class="button-group">
            <a href="tambah.php" class="btn survey">Isi Survey</a>
            <a href="logout.php" class="btn logout">Logout</a>
        </div>
    </div>
</body>
</html>
