<?php
include "koneksi.php";

// Cek apakah data POST ada
$id = isset($_POST['id']) ? $_POST['id'] : null;
$nama_pengunjung = isset($_POST['nama_pengunjung']) ? $_POST['nama_pengunjung'] : null;
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : null;
$no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : null;

// Pastikan semua input ada
if ($id && $nama_pengunjung && $alamat && $no_telp) {
    // Menyiapkan query untuk insert data ke database
    $querypengunjung = "INSERT INTO pengunjung (id, nama_pengunjung, alamat, no_telp) 
                        VALUES (?, ?, ?, ?)";
    
    // Menggunakan prepared statement
    if ($stmt = mysqli_prepare($conn, $querypengunjung)) {
        // Mengikat parameter
        mysqli_stmt_bind_param($stmt, "isss", $id, $nama_pengunjung, $alamat, $no_telp);
        
        // Menjalankan query
        if (mysqli_stmt_execute($stmt)) {
            echo "Data berhasil ditambahkan!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        
        // Menutup statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Semua data harus diisi!";
}

// Menutup koneksi
mysqli_close($conn);
?>