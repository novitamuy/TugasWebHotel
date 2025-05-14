<?php
session_start(); // Memulai sesi

// Menghapus semua variabel sesi
$_SESSION = array();

// Jika ingin menghancurkan sesi secara permanen, hapus cookie sesi
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Menghancurkan sesi
session_destroy();

// Mengarahkan pengguna kembali ke halaman login
header("Location: login.php");
exit();
?>