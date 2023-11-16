<?php
session_start();
include 'db.php';

if (isset($_GET['id']) && isset($_GET['quantity'])) {
    $productID = $_GET['id'];
    $quantityToRemove = $_GET['quantity'];

    if (isset($_SESSION['keranjang'][$productID])) {
        $_SESSION['keranjang'][$productID]['quantity'] -= $quantityToRemove;

        if ($_SESSION['keranjang'][$productID]['quantity'] <= 0) {
            unset($_SESSION['keranjang'][$productID]);
        }
    }
}

header("location: keranjang.php");
exit;
?>
