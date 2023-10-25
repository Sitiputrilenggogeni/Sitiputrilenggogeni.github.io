<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $uploadsDirectory = __DIR__ . '/uploads';
    $allowedExtensions = ['jpg', 'jpeg', 'png'];

    // Ambil daftar file di folder uploads
    $files = scandir($uploadsDirectory);

    // Filter hanya file dengan ekstensi yang diizinkan
    $images = array_filter($files, function ($file) use ($allowedExtensions) {
        $info = pathinfo($file);
        return in_array(strtolower($info['extension']), $allowedExtensions);
    });

    // Mulai tabel
    echo '<table border="1">';
    echo '<tr>';

    foreach ($images as $image) {
        echo '<td>';
        echo '<img src="uploads/' . $image . '" alt="' . $image . '" width="200" height="150" style="border-radius: 5px;">';
        echo '<div style="margin-top: 10px; ">'; // Menggunakan flexbox untuk tombol Edit dan Hapus
        echo '<a href="edit_file.php?filename=' . urlencode($image) . '" style="background-color: #d291bb; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; text-decoration: none; margin-inline: 10px">Edit</a>';
        echo '<a href="hapus_file.php?filename=' . urlencode($image) . '" style="background-color: #d291bb; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; text-decoration: none;">Hapus</a>';
        echo '</div>'; // Akhiri div untuk tombol Edit dan Hapus
        echo '</td>';
    }

    echo '</tr>';
    echo '</table>';
    ?>
</body>

</html>