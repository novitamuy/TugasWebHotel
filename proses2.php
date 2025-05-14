<?php
include "koneksi.php";

// Cek apakah semua data tersedia
if (
    isset($_POST['id_pembayaran'], $_POST['id_kamar'], $_POST['harga'], $_POST['total_biaya'],
          $_POST['cek_in'], $_POST['cek_out'], $_POST['no_kamar'], $_POST['metode_pembayaran'])
) {
    // Ambil data dan bersihkan input
    $id_pembayaran = mysqli_real_escape_string($conn, $_POST['id_pembayaran']);
    $id_kamar = mysqli_real_escape_string($conn, $_POST['id_kamar']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']);
    $total_biaya = mysqli_real_escape_string($conn, $_POST['total_biaya']);
    $cek_in = mysqli_real_escape_string($conn, $_POST['cek_in']);
    $cek_out = mysqli_real_escape_string($conn, $_POST['cek_out']);
    $no_kamar = mysqli_real_escape_string($conn, $_POST['no_kamar']);
    $metode_pembayaran = mysqli_real_escape_string($conn, $_POST['metode_pembayaran']);

    // Query insert
    $querypembayaran = "
        INSERT INTO pembayaran 
        (id_pembayaran, id_kamar, harga, total_biaya, cek_in, cek_out, no_kamar, metode_pembayaran)
        VALUES 
        ('$id_pembayaran', '$id_kamar', '$harga', '$total_biaya', '$cek_in', '$cek_out', '$no_kamar', '$metode_pembayaran')
    ";

    // Eksekusi query
    if (mysqli_query($conn, $querypembayaran)) {
        echo "✅ Pembayaran berhasil diproses!";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
} else {
    echo "⚠️ Data tidak lengkap!";
}

// Tutup koneksi
mysqli_close($conn);
?>
