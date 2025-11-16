<!DOCTYPE html>
<html>
<head>
    <title>SURVEY GERMANZIA</title>
    <link rel="stylesheet" href="designupdate.css">
</head>
<body>

    <h2>DATA SURVEY GERMANZIA</h2>
    <br>
    <h3>EDIT DATA SURVEY GERMANZIA</h3>
    <br>

    <?php
    include 'koneksi.php';

    $id = $_GET['id'];

    $data = mysqli_query($koneksi, "SELECT * FROM survey_mahasiswa WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>

    <form method="post" action="ubah.php">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id" value="<?php echo $d['id']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $d['email']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
            </tr>
            <tr>
                <td>Alasan Beasiswa</td>
                <td><input type="text" name="alasan_beasiswa" value="<?php echo $d['alasan_beasiswa']; ?>"></td>
            </tr>
            <tr>
                <td>Negara Tujuan</td>
                <td><input type="text" name="negara_tujuan" value="<?php echo $d['negara_tujuan']; ?>"></td>
            </tr>
            <tr>
                <td>Bidang Studi</td>
                <td><input type="text" name="bidang_studi" value="<?php echo $d['bidang_studi']; ?>"></td>
            </tr>
            <tr>
                <td>Harapan</td>
                <td><input type="text" name="harapan" value="<?php echo $d['harapan']; ?>"></td>
            </tr>
            <tr>
                <td>Rencana Setelah Lulus</td>
                <td><input type="text" name="rencana_setelah_lulus" value="<?php echo $d['rencana_setelah_lulus']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>

    <?php } ?>

    <br>
    <a href="survey_tampil.php">KEMBALI</a>

</body>
</html>
