<?php
$host = "localhost"; // nama host
$user = "root"; // nama pengguna MySQL
$pass = ""; // password MySQL
$db = "pembayaran sewa"; // nama database yang ingin Anda gunakan

$conn = mysqli_connect($localhost, $root, $pass, $dbpembayaran ,'sewa');

// Cek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>
