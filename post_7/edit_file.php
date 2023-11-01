<?php
if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];
    $filePath = __DIR__ . '/uploads/' . $filename;

    if (file_exists($filePath)) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['newImage'])) {
            $newImage = $_FILES['newImage'];

            if ($newImage['error'] === UPLOAD_ERR_OK) {
                $newFilePath = __DIR__ . '/uploads/' . $filename;

                if (move_uploaded_file($newImage['tmp_name'], $newFilePath)) {
                    echo '<script>alert("Image updated successfully.");</script>';
                    echo '<script>window.location.href = "index.php";</script>';
                    exit();
                } else {
                    echo '<script>alert("Failed to update the image.");</script>';
                }
            } else {
                echo '<script>alert("Failed to upload the new image.");</script>';
            }
        }

        echo '<h1>Edit Image: ' . $filename . '</h1>';
        echo '<form action="edit_file.php?filename=' . urlencode($filename) . '" method="POST" enctype="multipart/form-data">';
        echo 'New Image: <input type="file" name="newImage"><br>';
        echo '<input type="submit" value="Update Image">';
        echo '</form>';
    } else {
        echo 'File not found.';
    }
} else {
    echo 'Invalid request.';
}
?>
