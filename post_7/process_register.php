<?php
// Menyambungkan ke database
// $servername = "nama_host_database";
// $username_db = "nama_pengguna_database";
// $password_db = "kata_sandi_database";
// $database_name = "eyelash_beauty";

// $conn = new mysqli($servername, $username_db, $password_db, $database_name);

// Memeriksa koneksi
// if ($conn->connect_error) {
//     die("Koneksi ke database gagal: " . $conn->connect_error);
// }

require 'koneksi.php';

// Mengambil data dari formulir
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Enkripsi password sebelum menyimpannya ke database (contoh menggunakan password_hash)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Menyimpan data pengguna ke database
$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($koneksi->query($sql) === TRUE) {
    // Registrasi berhasil, redirect ke halaman login
    header('Location: login.php');
    exit();
} else {
    // Registrasi gagal, redirect kembali ke halaman register dengan pesan error
    header('Location: register.php?error=1');
    exit();
}

$conn->close();
?>
