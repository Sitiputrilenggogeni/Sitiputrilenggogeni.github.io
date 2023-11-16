<?php 
	include 'db.php';

	session_start();
	
	if (!isset($_SESSION['id_user'])) {
		header("location: login.php");
		exit;
	}
	
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);

	$id_user = $_SESSION['id_user']; 

	$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);

	if (isset($_POST['submit'])) {
		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$quantity = $_POST['quantity'];
	
		if (!isset($_SESSION['keranjang'])) {
			$_SESSION['keranjang'] = array();
		}
	
		if (array_key_exists($product_id, $_SESSION['keranjang'])) {
			$_SESSION['keranjang'][$product_id]['quantity'] += $quantity;
		} else {
			$_SESSION['keranjang'][$product_id] = array(
				'product_name' => $product_name,
				'product_price' => $product_price,
				'quantity' => $quantity,
			);
		}
	
		header("location: detail-produk.php?id=" . $product_id);
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tokomusik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php">Tokomusik</a></h1>
			<ul>
				<li><a href="user.php">Beranda</a></li>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="keranjang.php">Keranjang</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</header>

    <!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

    <!-- product detail -->
	<div class="section">
		<div class="container">
			<h3>Detail Produk</h3>
			<div class="box">
				<div class="col-2">
					<img src="produk/<?php echo $p->product_image ?>" width="100%">
				</div>
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp<?php echo number_format($p->product_price) ?></h4>
					<form action="detail-produk.php?id=<?php echo $p->product_id; ?>" method="post" class="tambah-ke-keranjang-form" onsubmit="return showPrompt()">
						<input type="hidden" name="product_id" value="<?php echo $p->product_id; ?>">
						<input type="hidden" name="product_name" value="<?php echo $p->product_name; ?>">
						<input type="hidden" name="product_price" value="<?php echo $p->product_price; ?>">
						<input type="hidden" name="quantity" value="1"> <!-- Input ini akan diubah oleh prompt -->
						<button type="submit" name="submit" class="tambah-ke-keranjang-button">Tambah ke Keranjang</button>
					</form>	
					<p>Deskripsi :<br>
						<?php echo $p->product_description ?>
					</p>
					<p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank">
						Hubungin via Whatsapp
						<img src="img/wa.jpeg" width="50px"></a>
					</p>
				</div>
			</div>
		</div>
	</div>

    <!-- footer -->
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
		function showPrompt() {
			var quantity = prompt("Masukkan jumlah barang yang ingin ditambahkan:", "1");

			if (quantity === null || isNaN(quantity) || parseInt(quantity) <= 0) {
				alert("Masukkan angka dengan benar.");
				return false;
			}

			document.querySelector('input[name="quantity"]').value = quantity;

			return true;
		}
	</script>
</body>
</html>