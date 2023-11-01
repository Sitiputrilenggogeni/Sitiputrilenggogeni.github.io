<?php
session_start();

require 'koneksi.php';

// Mengambil data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan validasi username dan password di sini
$sql = "SELECT * FROM user WHERE username='$username'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Validasi berhasil, set session dan redirect ke halaman dashboard
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    } else {
        // Password tidak cocok, redirect kembali ke halaman login dengan pesan error
        header('Location: login.php?error=1');
        exit();
    }
} else {
    // Pengguna tidak ditemukan, redirect kembali ke halaman login dengan pesan error
    header('Location: login.php?error=1');
    exit();
}

$conn->close();
?>
