<?php
include 'koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Hapus data berdasarkan ID
mysqli_query($koneksi, "DELETE FROM survey_mahasiswa WHERE id='$id'");

header("location:survey_tampil.php");
?>
