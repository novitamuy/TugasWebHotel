<?php
$servername = "localhost";
$db = "penyewaan_hotel";
$pass = "";
$username = "root";

// buat koneksi
$conn = mysqli_connect($servername, $username, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
