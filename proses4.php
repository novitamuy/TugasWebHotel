<?php
include 'koneksi.php';

// Memeriksa apakah data POST ada
if (isset($_POST['name'], $_POST['username'], $_POST['password'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = 'user'; // Misalnya, Anda ingin menetapkan level default sebagai 'user'

    // Mengecek apakah username sudah terdaftar
    $sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        die("Username sudah terdaftar!");
    }

    // Enkripsi password sebelum disimpan ke database
  $password=$password;

    // Menyiapkan query SQL untuk menyimpan data ke database
    $sql = "INSERT INTO user (name, username, password, level) VALUES (?, ?, ?, ?)";

    // Menyiapkan statement untuk mencegah SQL Injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $username, $password, $level);

    // Mengeksekusi query
    if ($stmt->execute()) {
        echo "Registrasi berhasil! <a href='login.php'>Klik di sini untuk login</a>";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Menutup statement
    $stmt->close();
} else {
    echo "Semua data harus diisi!";
}

// Menutup koneksi
$conn->close();
?>