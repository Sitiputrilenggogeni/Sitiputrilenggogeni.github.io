<?php
include("koneksi.php");

$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
