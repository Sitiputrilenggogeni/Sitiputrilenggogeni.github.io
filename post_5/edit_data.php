<?php
include("koneksi.php");

$id = $_POST["id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "UPDATE users SET nama='$nama', email='$email', password='$password' WHERE id=$id";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil diperbarui";
} else {
    echo "Error updating record: " . $koneksi->error;
}

$koneksi->close();
?>
