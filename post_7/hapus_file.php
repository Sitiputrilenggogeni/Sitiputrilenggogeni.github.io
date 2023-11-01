<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['filename'])) {
    $filename = $_GET['filename'];

    // Lokasi folder 'uploads'
    $uploadsDirectory = __DIR__ . '/uploads/';

    // Periksa apakah file ada sebelum mencoba menghapusnya
    if (file_exists($uploadsDirectory . $filename)) {
        // Hapus file jika ada di folder 'uploads'
        if (unlink($uploadsDirectory . $filename)) {
            echo '<script>alert("File berhasil dihapus: ' . $filename . '");</script>';
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        } else {
            echo '<script>alert("Maaf, terjadi kesalahan saat menghapus file.");</script>';
        }
    } else {
        echo '<script>alert("File tidak ditemukan.");</script>';
    }
} else {
    echo "Metode permintaan tidak valid atau nama file tidak diberikan.";
}
?>
