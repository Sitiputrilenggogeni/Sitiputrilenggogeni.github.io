<?php
include("koneksi.php");

$query = "SELECT * FROM users";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td><button class='edit-button' data-id='" . $row['id'] . "'>Edit</button> <button class='delete-button' data-id='" . $row['id'] . "'>Hapus</button></td>";
        echo "</tr>";
    }
} else {
    echo "Tidak ada data";
}

$koneksi->close();
?>
