<?php
include 'db.php';

session_start();

if (!isset($_SESSION['id_user'])) {
    header("location: login.php");
    exit;
}

$id_user = $_SESSION['id_user']; 

$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);

$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tokomusik - Keranjang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="">Tokomusik</a></h1>
            <ul>
                <li><a href="User.php">Beranda</a></li>
                <li><a href="keranjang.php">Keranjang</a></li>
                <li><a href="keluar.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Keranjang Belanja</h3>
            <div class="box">
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $totalBelanja = 0;
                        $no = 1;

                        foreach ($keranjang as $key => $item) {
                            $produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) WHERE product_id = '$key'");
                            $row = mysqli_fetch_assoc($produk);
                            $subtotal = $item['quantity'] * $row['product_price'];
                            $totalBelanja += $subtotal;
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['category_name']; ?></td>
                                <td><?php echo $row['product_name']; ?></td>
                                <td>Rp<?php echo number_format($row['product_price']); ?></td>
                                <td><?php echo $item['quantity']; ?></td>
                                <td>Rp<?php echo number_format($subtotal); ?></td>
                                <td>
                                    <a href="hapus-isi-keranjang.php?id=<?php echo $row['product_id']; ?>" onclick="hapusBarang('<?php echo $row['product_id']; ?>', '<?php echo $item['quantity']; ?>')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                        <?php if (empty($keranjang)) { ?>
                            <tr>
                                <td colspan="7">Keranjang belanja kosong</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <?php if (!empty($keranjang)) { ?>
                    <div style="margin-top: 20px;">
                        <h4>Total Belanja: Rp. <?php echo number_format($totalBelanja); ?></h4>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p><?php echo $a->admin_address ?></p>

			<h4>Email</h4>
			<p><?php echo $a->admin_email ?></p>

			<h4>No. Hp</h4>
			<p><?php echo $a->admin_telp ?></p>
			<small>Copyright &copy; 2023 - Tokomusik.</small>
		</div>
	</div>

    <script>
    function hapusBarang(productID, currentQuantity) {
        var jumlahHapus = prompt('Masukkan jumlah yang ingin dihapus:', currentQuantity);

        if (jumlahHapus === null) {
            return;
        }

        jumlahHapus = parseInt(jumlahHapus);

        if (isNaN(jumlahHapus) || jumlahHapus <= 0) {
            alert('Masukkan angka dengan benar.');
            return;
        }

        if (jumlahHapus > currentQuantity) {
            alert('Angka yang Anda masukkan lebih dari jumlah barang yang ada di keranjang.');
            return;
        }

        window.location.href = 'hapus-isi-keranjang.php?id=' + productID + '&quantity=' + jumlahHapus;
    }
    </script>
</body>

</html>
