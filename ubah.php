<?php
include 'koneksi.php';

$id                     = $_POST['id'];
$nama                   = $_POST['nama'];
$email                  = $_POST['email'];
$tanggal                = $_POST['tanggal'];
$alasan_beasiswa        = $_POST['alasan_beasiswa'];
$negara_tujuan          = $_POST['negara_tujuan'];
$bidang_studi           = $_POST['bidang_studi'];
$harapan                = $_POST['harapan'];
$rencana_setelah_lulus  = $_POST['rencana_setelah_lulus'];

mysqli_query($koneksi, 
    "UPDATE survey_mahasiswa SET nama='$nama', email='$email', tanggal='$tanggal', alasan_beasiswa='$alasan_beasiswa', negara_tujuan='$negara_tujuan', bidang_studi='$bidang_studi', harapan='$harapan', rencana_setelah_lulus='$rencana_setelah_lulus' WHERE id='$id'");

header("location:survey_tampil.php");
?>
