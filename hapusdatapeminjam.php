<?php 
$ambil = $koneksi->query("SELECT * FROM datapeminjam WHERE id_peminjam='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM datapeminjam WHERE id_peminjam='$_GET[id]'");

echo "<script>alert('data terhapus');</script>";
echo "<script>location='index.php?halaman=datapeminjam';</script>";

?>