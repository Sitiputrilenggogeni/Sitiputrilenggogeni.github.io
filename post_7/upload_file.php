<?php
$uploadsDirectory = __DIR__ . '/uploads';
$allowedExtensions = ['jpg', 'jpeg', 'png'];

// Ambil ekstensi file yang diunggah
$extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));

// Cek apakah ekstensi file diizinkan
if (in_array($extension, $allowedExtensions)) {
    // Buat format penamaan file: yyyy-mm-dd nama-file.ekstensi
    $newFileName = date('Y-m-d') . ' ' . $_FILES['file']['name'];

    // Tentukan path file yang baru
    $targetFile = $uploadsDirectory . '/' . $newFileName;

    // Pindahkan file yang diunggah ke folder uploads dengan nama baru
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
        echo "File berhasil diunggah dengan nama: " . $newFileName;
    } else {
        echo "Maaf, terjadi kesalahan saat mengupload file.";
    }
} else {
    echo "Hanya file JPG, JPEG, dan PNG yang diizinkan.";
}
?>
