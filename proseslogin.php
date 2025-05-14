<?php
session_start(); // Memulai sesi
include 'koneksi.php'; // Pastikan koneksi ke database sudah benar

// Memeriksa apakah data POST ada
if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menyiapkan query untuk mengambil data pengguna
    $sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Memeriksa apakah username ditemukan
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Memeriksa password
        if (password_verify($password, $data['password'])) {
            // Menyimpan data pengguna ke session
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];

            // Redirect berdasarkan level pengguna
            if ($data['level'] == "admin") {
                header("Location:beranda.php");
            } else if ($data['level'] == "user") {
                header("Location: index.php");
            } else {
                header("Location: login.php");
            }
            exit();
        }
    }
    // Menutup statement
    $stmt->close();
} else {
    echo "Semua data harus diisi!";
}

// Menutup koneksi
$conn->close();
?>