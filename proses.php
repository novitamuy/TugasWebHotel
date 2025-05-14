<?php
include "koneksi.php";

// Cek apakah data POST ada
$id_kamar = isset($_POST['id_kamar']) ? $_POST['id_kamar'] : null;
$nokamar = isset($_POST['no_kamar']) ? $_POST['no_kamar'] : null;
$typekamar = isset($_POST['type_kamar']) ? $_POST['type_kamar'] : null;
$lantai = isset($_POST['lantai']) ? $_POST['lantai'] : null;
$fasilitas = isset($_POST['fasilitas']) ? $_POST['fasilitas'] : null;

// Pastikan semua input ada
if ($id_kamar && $nokamar && $typekamar && $lantai && $fasilitas) {
    // Query untuk insert data ke database
    $querykamar = "INSERT INTO kamar (id_kamar, no_kamar, type_kamar, lantai, fasilitas) 
                   VALUES ('$id_kamar', '$nokamar', '$typekamar', '$lantai', '$fasilitas')";

    // Menjalankan query dan memeriksa keberhasilannya
    if (mysqli_query($conn, $querykamar)) {
        echo "<script>
        alert('Data Berhasil Ditambahkan!')
        document.location.href = 'pembayaran.php'
        </script>";
    } else {
        echo "Error: " . mysqli_error($conn) . "<br>" . $querykamar;
    }
} else {
    echo "Semua data harus diisi!";
}

// Menutup koneksi
mysqli_close($conn);
?>
