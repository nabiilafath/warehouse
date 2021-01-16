<?php
$ambil= $koneksi->query("SELECT * FROM buku WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM buku WHERE id='$_GET[id]'");

echo "<script>alert('data berhasil dihapus')</script>";
echo "<script>location='index.php?halaman=buku';</script>";
?>

